<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-2xl font-bold">
                    England
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Rank
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Club
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    MP
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    W
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    D
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    L
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    GF
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    GA
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    PTS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($standings as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->overall_league_position }}
                                </th>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <img class="w-24 h-24" src={{ $data->team_badge }} alt={{ $data->team_name }}>
                                        <p>{{ $data->team_name }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->overall_league_payed }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->overall_league_W }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->overall_league_D }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->overall_league_L }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->overall_league_GF }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->overall_league_GA }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->overall_league_PTS }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
