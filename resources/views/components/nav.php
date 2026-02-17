<nav class="bg-base-200 text-base-content navbar py-2">
    <div class="navbar-start items-center gap-2 flex">
        <button type="button" class="btn btn-square btn-sm lg:hidden" aria-haspopup="dialog" aria-expanded="false"
            aria-controls="layout-sidebar" data-overlay="#layout-sidebar">
            <span class="icon-[tabler--menu-2] size-4.5"></span>
        </button>

        <div class="input border-0 px-2">
            <span class="icon-[tabler--search] text-base-content/80 my-auto me-2 size-4 shrink-0"></span>
            <input type="search" class="grow placeholder:text-sm" placeholder="Type to Search..." id="kbdInput" />
            <label class="sr-only" for="kbdInput">Search</label>
        </div>

        <label class="swap swap-rotate">
            <input type="checkbox" value="dark" data-toggle-theme="dark" class="theme-controller" />
            <span class="swap-off icon-[tabler--sun] size-7"></span>
            <span class="swap-on icon-[tabler--moon] size-7"></span>
        </label>
    </div>

    <div class="navbar-end items-center gap-2">
        <div class="dropdown relative inline-flex [--offset:21]">
            <button id="profile-dropdown" type="button" class="dropdown-toggle avatar" aria-haspopup="menu"
                aria-expanded="false" aria-label="Dropdown">
                <span class="rounded-field size-9.5">
                    <img src="/assets/images/avatars/2.png" alt="User Avatar" />
                </span>
            </button>
            <ul class="dropdown-menu dropdown-open:opacity-100 max-w-75 hidden w-full space-y-0.5" role="menu"
                aria-orientation="vertical" aria-labelledby="profile-dropdown" tabindex="-1">
                <li class="dropdown-header pt-4.5 mb-1 gap-4 px-5 pb-3.5">
                    <div class="avatar avatar-online-top">
                        <div class="w-10 rounded-full">
                            <img src="/assets/images/avatars/2.png" alt="avatar" />
                        </div>
                    </div>
                    <div>
                        <h6 class="text-base-content mb-0.5 font-semibold">
                            Mitchell Johnson
                        </h6>
                        <p class="text-base-content/80 font-medium">
                            Influencer
                        </p>
                    </div>
                </li>
                <li>
                    <a class="dropdown-item px-3" href="#">
                        <span class="icon-[tabler--user] size-5"></span>
                        My account
                    </a>
                </li>
                <li>
                    <a class="dropdown-item px-3" href="#">
                        <span class="icon-[tabler--settings] size-5"></span>
                        Setting
                    </a>
                </li>
                <li>
                    <a class="dropdown-item px-3" href="#">
                        <span class="icon-[tabler--credit-card] size-5"></span>
                        Billing
                    </a>
                </li>
                <li>
                    <hr class="border-base-content/20 -mx-2 my-1" />
                </li>
                <li>
                    <a class="dropdown-item px-3" href="#">
                        <span class="icon-[tabler--users] size-5"></span>
                        Manage team
                    </a>
                </li>
                <li>
                    <a class="dropdown-item px-3" href="#">
                        <span class="icon-[tabler--edit] size-5"></span>
                        Customisation
                    </a>
                </li>
                <li class="mb-1">
                    <a class="dropdown-item px-3" href="#">
                        <span class="icon-[tabler--circle-plus] size-5"></span>
                        Add team account
                    </a>
                </li>
                <li class="dropdown-footer p-2 pt-1">
                    <a class="btn btn-text btn-error btn-block h-11 justify-start px-3 font-normal" href="#">
                        <span class="icon-[tabler--logout] size-5"></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
