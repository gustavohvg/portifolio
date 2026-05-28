<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\StoreProjectRequest;
use App\Http\Requests\Panel\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Lista todos os projetos com paginação.
     */
    public function index(): View
    {
        $projects = Project::query()
            ->where('user_id', auth()->id())
            ->with('tags')
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('panel.projects.index', compact('projects'));
    }

    /**
     * Exibe o formulário de criação.
     */
    public function create(): View
    {
        $tags = Tag::orderBy('name')->get();

        return view('panel.projects.create', compact('tags'));
    }

    /**
     * Salva um novo projeto.
     */
    public function store(StoreProjectRequest $request): RedirectResponse
    {
        $project = auth()->user()->projects()->create($request->validated());

        // Sincroniza as tags (many-to-many)
        if ($request->has('tags')) {
            $project->tags()->sync($request->input('tags'));
        }

        return redirect()
            ->route('panel.projects.index')
            ->with('success', 'Projeto criado com sucesso!');
    }

    /**
     * Exibe um projeto específico.
     */
    public function show(Project $project): View
    {
        $this->authorizeProject($project);

        $project->load('tags');

        return view('panel.projects.show', compact('project'));
    }

    /**
     * Exibe o formulário de edição.
     */
    public function edit(Project $project): View
    {
        $this->authorizeProject($project);

        $tags = Tag::orderBy('name')->get();

        // IDs das tags já associadas ao projeto
        $selectedTags = $project->tags->pluck('id')->toArray();

        return view('panel.projects.edit', compact('project', 'tags', 'selectedTags'));
    }

    /**
     * Atualiza um projeto existente.
     */
    public function update(UpdateProjectRequest $request, Project $project): RedirectResponse
    {
        $this->authorizeProject($project);

        $project->update($request->validated());

        // sync() adiciona novas, remove as desmarcadas
        $project->tags()->sync($request->input('tags', []));

        return redirect()
            ->route('panel.projects.index')
            ->with('success', 'Projeto atualizado com sucesso!');
    }

    /**
     * Remove um projeto.
     */
    public function destroy(Project $project): RedirectResponse
    {
        $this->authorizeProject($project);

        // Remove as tags associadas antes de deletar
        $project->tags()->detach();
        $project->delete();

        return redirect()
            ->route('panel.projects.index')
            ->with('success', 'Projeto removido com sucesso!');
    }

    // ─── Helpers ──────────────────────────────────────────────

    /**
     * Garante que o projeto pertence ao usuário logado.
     * Evita que um usuário delete/edite projetos de outro.
     */
    private function authorizeProject(Project $project): void
    {
        abort_if($project->user_id !== auth()->id(), 403);
    }
}
