<div class="bg-white">
    <h2 class="text-lg font-semibold font-display text-gray-700 tracking-tight mx-3 py-1.5">Add permission
    </h2>
    <div class="border-t border-gray-300 mt-1"></div>
    <form wire:submit="save" method="POST" class="mx-2 py-4">
        <div class="grid gap-5 grid-cols-1 md:grid-cols-2 px-2">
            <div>
                <x-input label="Name" wire:model="name" />
            </div>
            <div>
                <x-input label="Description" wire:model="description" />
            </div>
        </div>
    </form>

    <div class="border-t border-gray-300 mt-2"></div>
    <div class="bg-slate-100">
        <div class="px-4 py-4">
            <x-button sm wire:click="$dispatch('closeModal')" flat label="Cancel & Close" />
            <x-button sm wire:click="savePermission" class="ml-2 font-medium leading-6" blue label="Save" />
        </div>
    </div>
</div>
