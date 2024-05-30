@extends('layout')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                    <form action="{{ route('rekap.store') }}" method="post" class=" p-5">
                        @csrf
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <tr>
                            <td>
                                <div class="mb-5">
                                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama" required />
                                  </div>
                            </td>
                       
                            <td>
                       
                                <div class="mb-5">
                                    <label for="kota" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                                    <select name="kota" id="kota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Pilih Kota</option>
                                        @foreach ($kota as $item)
                                        <option value="{{ $item->id }}">{{ $item->name_kota }}</option>
                                        @endforeach
                                        
                                    </select>
                                  </div>
                            </td>
                        </tr>
                        <tr>
                          
                            <td>
                                <div class="mb-5">
                                    <label for="kecamatan/kelurahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan / Kelurahan</label>
                                    <input type="text" name="kecamatan_kelurahan" id="kecamatan/kelurahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Kecamatan/Kelurahan " required />
                                  </div>
                            </td>
                         
                            <td>
                                <div class="mb-5">
                                    <label for="jenjang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenjang</label>
                                    <select name="jenjang" id="jenjang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Pilih Jenjang</option>
                                        @foreach ($jenjang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_jenjang }}</option>
                                        @endforeach
                                        
                                    </select>
                                  </div>
                            </td>
                        </tr>
                        <tr>
                         
                            <td>
                                <div class="mb-5">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Pesan" required />
                                  </div>
                            </td>
                           
                            <td>
                                <div class="mb-5">
                                    <label for="topik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topik Pertanyaan</label>
                                    <select name="topik" id="topik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">Pilih Topik</option>
                                        @foreach ($topik as $item)
                                        <option value="{{ $item->id }}">{{ $item->name_topik }}</option>
                                        @endforeach
                                        <option value="">Lainnya</option>
                                    </select>
                                  </div>
                            </td>
                        </tr>
                        <tr>
                        
                            <td>
                                <div class="mb-5">
                                    <label for="pesan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                                    <textarea id="pesan" name="pesan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Pesan..."></textarea>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                  </form>

            </div>
        </div>
    </section>
@endsection
