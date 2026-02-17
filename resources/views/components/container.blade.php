<div id="app" class="flex min-h-screen flex-col">
    <div class="bg-base-100 text-base-content border-base-content/20 lg:ps-75 pt-[2px] sticky top-0 z-50 flex border-b">
        <div class="mx-auto w-full">
            {{ $nav }}
        </div>
    </div>

    {{ $sidebar }}

    <div class="bg-base-100 text-base-content lg:ps-75 flex grow flex-col">
        {{ $page }}
        {{ $footer }}
    </div>
</div>
