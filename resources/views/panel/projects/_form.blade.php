{{-- Título --}}
<div>
    <label for="title" class="block text-sm font-medium text-slate-300 mb-1.5">
        Título <span class="text-red-400">*</span>
    </label>
    <input type="text" id="title" name="title"
           value="{{ old('title', $project->title ?? '') }}"
           placeholder="Ex: Sistema de gestão de estoque"
           class="w-full bg-slate-800 border @error('title') border-red-500 @else border-slate-700 @enderror
                  rounded-lg px-4 py-2.5 text-sm text-white placeholder:text-slate-500
                  focus:outline-none focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition">
    @error('title')
    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
    @enderror
</div>

{{-- Descrição --}}
<div>
    <label for="description" class="block text-sm font-medium text-slate-300 mb-1.5">
        Descrição <span class="text-red-400">*</span>
    </label>
    <textarea id="description" name="description" rows="4"
              placeholder="Descreva o projeto, tecnologias usadas, seu papel..."
              class="w-full bg-slate-800 border @error('description') border-red-500 @else border-slate-700 @enderror
                     rounded-lg px-4 py-2.5 text-sm text-white placeholder:text-slate-500
                     focus:outline-none focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition resize-none">{{ old('description', $project->description ?? '') }}</textarea>
    @error('description')
    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
    @enderror
</div>

{{-- URLs --}}
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
    <div>
        <label for="github_url" class="block text-sm font-medium text-slate-300 mb-1.5">
            GitHub URL
        </label>
        <input type="url" id="github_url" name="github_url"
               value="{{ old('github_url', $project->github_url ?? '') }}"
               placeholder="https://github.com/usuario/repo"
               class="w-full bg-slate-800 border @error('github_url') border-red-500 @else border-slate-700 @enderror
                      rounded-lg px-4 py-2.5 text-sm text-white placeholder:text-slate-500
                      focus:outline-none focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition">
        @error('github_url')
        <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="demo_url" class="block text-sm font-medium text-slate-300 mb-1.5">
            Demo URL
        </label>
        <input type="url" id="demo_url" name="demo_url"
               value="{{ old('demo_url', $project->demo_url ?? '') }}"
               placeholder="https://meusite.com"
               class="w-full bg-slate-800 border @error('demo_url') border-red-500 @else border-slate-700 @enderror
                      rounded-lg px-4 py-2.5 text-sm text-white placeholder:text-slate-500
                      focus:outline-none focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition">
        @error('demo_url')
        <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
        @enderror
    </div>
</div>

{{-- Thumbnail --}}
<div>
    <label for="thumbnail_url" class="block text-sm font-medium text-slate-300 mb-1.5">
        Thumbnail URL
    </label>
    <input type="url" id="thumbnail_url" name="thumbnail_url"
           value="{{ old('thumbnail_url', $project->thumbnail_url ?? '') }}"
           placeholder="https://..."
           class="w-full bg-slate-800 border @error('thumbnail_url') border-red-500 @else border-slate-700 @enderror
                  rounded-lg px-4 py-2.5 text-sm text-white placeholder:text-slate-500
                  focus:outline-none focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition">
    @error('thumbnail_url')
    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
    @enderror
</div>

{{-- Tags --}}
@if(isset($tags) && $tags->isNotEmpty())
    <div>
        <label class="block text-sm font-medium text-slate-300 mb-1.5">Tags</label>
        <div class="flex flex-wrap gap-2">
            @foreach($tags as $tag)
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                           {{ in_array($tag->id, $selectedTags ?? old('tags', [])) ? 'checked' : '' }}
                           class="w-4 h-4 rounded border-slate-600 bg-slate-800 text-sky-400
                              focus:ring-sky-400 focus:ring-offset-slate-900">
                    <span class="text-sm text-slate-300">{{ $tag->name }}</span>
                </label>
            @endforeach
        </div>
        @error('tags')
        <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
        @enderror
    </div>
@endif

{{-- Destaque --}}
<div class="flex items-center gap-3">
    <input type="hidden" name="is_featured" value="0">
    <input type="checkbox" id="is_featured" name="is_featured" value="1"
           {{ old('is_featured', $project->is_featured ?? false) ? 'checked' : '' }}
           class="w-4 h-4 rounded border-slate-600 bg-slate-800 text-sky-400
                  focus:ring-sky-400 focus:ring-offset-slate-900">
    <label for="is_featured" class="text-sm text-slate-300 cursor-pointer">
        Marcar como projeto em destaque
    </label>
</div>
