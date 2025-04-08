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
