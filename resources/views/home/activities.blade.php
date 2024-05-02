<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Más proyectos') }}
        </h2>
    </x-slot>
    <main class="mt-6 bg-white/80 dark:bg-black/80 bg-opacity-80 dark:bg-opacity-80">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
            <div id="docs-card" class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" style="margin-right: 100px; margin-left: 100px;">
                <div class="relative flex w-full flex-1 items-stretch">
                    <img src="{{ asset('img/imagen1.jpg')}}" alt="" class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.3)] dark:block"/>
                    <div class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
                        <!--#-->
                    </div>
                </div>
                <div class="relative flex items-center gap-6 lg:items-end">
                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                        <div class="pt-3 sm:pt-5 lg:pt-0">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Proyectos</h2>
                            <p class="mt-4 text-sm/relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis fuga natus impedit perspiciatis enim, optio maiores labore sint, delectus inventore a eum, aperiam tenetur? Magni reiciendis rem sint delectus?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="docs-card" class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" style="margin-right: 100px; margin-left: 100px;">
                <div class="relative flex w-full flex-1 items-stretch">
                    <img src="{{ asset('img/imagen2.jpg')}}" alt="" class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.3)] dark:block"/>
                    <div class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
                        <!--#-->
                    </div>
                </div>
                <div class="relative flex items-center gap-6 lg:items-end">
                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                        <div class="pt-3 sm:pt-5 lg:pt-0">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Proyectos</h2>
                            <p class="mt-4 text-sm/relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis fuga natus impedit perspiciatis enim, optio maiores labore sint, delectus inventore a eum, aperiam tenetur? Magni reiciendis rem sint delectus?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="docs-card" class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" style="margin-right: 100px; margin-left: 100px;">
                <div class="relative flex w-full flex-1 items-stretch">
                    <img src="{{ asset('img/imagen3.jpg')}}" alt="" class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.3)] dark:block"/>
                    <div class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
                        <!--#-->
                    </div>
                </div>
                <div class="relative flex items-center gap-6 lg:items-end">
                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                        <div class="pt-3 sm:pt-5 lg:pt-0">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Proyectos</h2>
                            <p class="mt-4 text-sm/relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis fuga natus impedit perspiciatis enim, optio maiores labore sint, delectus inventore a eum, aperiam tenetur? Magni reiciendis rem sint delectus?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="docs-card" class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]" style="margin-right: 100px; margin-left: 100px;">
                <div class="relative flex w-full flex-1 items-stretch">
                    <img src="{{ asset('img/imagen4.jpg')}}" alt="" class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.3)] dark:block"/>
                    <div class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
                        <!--#-->
                    </div>
                </div>
                <div class="relative flex items-center gap-6 lg:items-end">
                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                        <div class="pt-3 sm:pt-5 lg:pt-0">
                            <h2 class="text-xl font-semibold text-black dark:text-white">Proyectos</h2>
                            <p class="mt-4 text-sm/relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis fuga natus impedit perspiciatis enim, optio maiores labore sint, delectus inventore a eum, aperiam tenetur? Magni reiciendis rem sint delectus?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
