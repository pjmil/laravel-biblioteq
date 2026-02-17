@props(['links', 'item'])

<aside id="layout-sidebar" class="bg-base-200 overlay overlay-open:translate-x-0 drawer drawer-start sm:w-75 inset-y-0 start-0 hidden h-full [--auto-close:lg] lg:z-50 lg:block lg:translate-x-0 lg:shadow-none" aria-label="Sidebar" tabindex="-1">
    <div class="drawer-body border-base-content/20 h-full border-e p-0">
        <div class="flex h-full max-h-full flex-col">
            <div class="bg-base-200 text-base-content/50 border-base-content/20 flex items-center gap-4 border-b px-4 py-4">
                <h1>
                    <span class="text-primary">{{ str(config('app.name'))->pascal() }}</span>
                    \ <span>Biblioteq</span>
                </h1>
                <button type="button" class="btn btn-text-base btn-circle btn-sm absolute end-3 top-3 lg:hidden" aria-label="Close" data-overlay="#layout-sidebar" aria-expanded="false">
                    <span class="icon-[tabler--x] size-4.5"></span>
                </button>
            </div>
            <div class="h-full overflow-y-auto">
                <ul class="menu menu-sm gap-1 p-3">
                    @foreach ($links as $key => $values)
                        <li class="text-base-content/50 before:bg-base-content/20 mt-2 p-2 text-xs uppercase before:absolute before:-start-3 before:top-1/2 before:h-0.5 before:w-2.5">
                            {{ $key }}
                        </li>

                        <ul>
                        @foreach ($values as $item)
                            <li id="{{ $item }}">
                                <a href="/biblio/{{ $item }}" @class('inline-flex w-full items-center px-2', [ 'menu-active'=> $item === request()->segment(2),
                                    ])>
                                    <span>{{ $item }}</span>
                                </a>
                            </li>
                        @endforeach
                        </ul>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</aside>
