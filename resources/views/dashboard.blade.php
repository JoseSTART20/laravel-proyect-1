<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pagina de presentacion') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg relative">
                <img src="{{ asset('img/imagen1.jpg')}}" alt="Laravel documentation screenshot" class="aspect-video h-64 w-full rounded-[10px] object-top object-cover"/>
                <div class="absolute inset-0 bg-gradient-to-t from-transparent to-white dark:from-transparent dark:to-zinc-900"></div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-black dark:text-white">Proyectos</h2>
                    <p class="mt-4 text-sm text-gray-900 dark:text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis fuga natus impedit perspiciatis enim, optio maiores labore sint, delectus inventore a eum, aperiam tenetur? Magni reiciendis rem sint delectus?</p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <a class="text-xl font-semibold text-black dark:text-white" href="{{url('activities')}}">Actividades</a>
                    <p class="mt-4 text-sm text-gray-900 dark:text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi facere reprehenderit maxime asperiores deserunt, fugiat earum rerum! Suscipit, corrupti commodi, praesentium quibusdam deleniti eum, vitae delectus pariatur iste earum dignissimos.</p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <a class="text-xl font-semibold text-black dark:text-white" href="{{url('proyects')}}">Mas proyectos</a>
                    <p class="mt-4 text-sm text-gray-900 dark:text-gray-100">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora dolor ab, eligendi, debitis iusto laborum hic, temporibus facere animi sit similique perspiciatis unde eveniet aliquam eius eos commodi quidem earum!</p>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>



