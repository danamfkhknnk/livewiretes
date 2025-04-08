<section>
    <form wire:submit="updatePost" class="flex flex-col gap-6">
        <flux:input
            wire:model="form.title"
            :label="__('Title')"
            type="text"
            autofocus
            placeholder="input title"
        />
        <flux:input
            wire:model="form.image"
            label="Image"
            type="file"
        />
        <div class="flex gap-2">
            <img src="{{ asset('storage/'.$form->post->image)}}" alt="{{$form->post->image}}" @class([

            'w-12 h-12 roundex-xl',
            'opacity-40' => $form->image,
            ])
                />
            @if ($form->image)
                <img src="{{$form->image->temporaryUrl()}}" class="w-12 h-12 rounded-xl" />

            @endif
        </div>
        <flux:textarea
            wire:model="form.content"
            label="Content"
            placeholder="input content"
        />
        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">Update</flux:button>
        </div>
    </form>
</section>
