<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Experiencia laboral') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="grid grid-cols-1 gap-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden sm:rounded-lg relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-transparent to-white dark:from-transparent dark:to-zinc-900"></div>
                    <div class="p-6">
                        <h1 class="text-3xl font-bold mb-4">Experiencia Profesional en Desarrollo</h1>

                        <div class="mb-8">
                            <h2 class="text-xl font-semibold mb-2 text-black dark:text-white">Desarrollador Web Senior</h2>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Empresa:</strong> XYZ Tech Solutions</p>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Periodo:</strong> Enero 2018 - Presente</p>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Descripción:</strong> Encargado de liderar equipos de desarrollo, diseñar arquitecturas de aplicaciones web, y garantizar la entrega de productos de alta calidad.</p>
                        </div>

                        <div class="mb-8">
                            <h2 class="text-xl font-semibold mb-2 text-black dark:text-white">Desarrollador de Software Junior</h2>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Empresa:</strong> ABC Software Development</p>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Periodo:</strong> Junio 2016 - Diciembre 2017</p>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Descripción:</strong> Participación en el desarrollo de aplicaciones empresariales, colaboración en el diseño de bases de datos y resolución de incidencias.</p>
                        </div>

                        <div>
                            <h2 class="text-xl font-semibold mb-2 text-black dark:text-white">Pasantía en Desarrollo de Aplicaciones Móviles</h2>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Empresa:</strong> Mobile Apps Inc.</p>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Periodo:</strong> Mayo 2015 - Agosto 2015</p>
                            <p class="mt-4 text-sm text-gray-900 dark:text-gray-100"><strong>Descripción:</strong> Aprendizaje de desarrollo de aplicaciones móviles utilizando tecnologías como Android SDK y iOS SDK. Participación en proyectos de desarrollo de aplicaciones móviles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div> 
</x-app-layout>

