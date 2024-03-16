<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Pendaftaran') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('pendaftaran.update', $pendaftaran->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div>
                            <x-input-label for="nama_lengkap" :value="__('Nama Lengkap')" />
                            <x-text-input id="nama_lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap" :value="old('name', $pendaftaran->nama_lengkap)" autofocus />
                            <x-input-error :messages="$errors->get('nama_lengkap')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="foto" :value="__('Foto')" />
                            <input id="foto" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="file" name="foto" :value="old('foto', $pendaftaran->foto)"/>
                            <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="alamat_ktp" :value="__('Alamat KTP')" />
                            <x-text-input id="alamat_ktp" class="block mt-1 w-full" type="text" name="alamat_ktp" :value="old('alamat_ktp', $pendaftaran->alamat_ktp)"/>
                            <x-input-error :messages="$errors->get('alamat_ktp')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="alamat" :value="__('Alamat Domisili')" />
                            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat', $pendaftaran->alamat)"/>
                            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kecamatan" :value="__('Kecamatan')" />
                            <x-text-input id="kecamatan" class="block mt-1 w-full" type="text" name="kecamatan" :value="old('kecamatan', $pendaftaran->kecamatan)"/>
                            <x-input-error :messages="$errors->get('kecamatan')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kabupaten" :value="__('Kabupaten')" />
                            <x-text-input id="kabupaten" class="block mt-1 w-full" type="text" name="kabupaten" :value="old('kabupaten', $pendaftaran->kabupaten)"/>
                            <x-input-error :messages="$errors->get('kabupaten')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="provinsi" :value="__('Provinsi')" />
                            <x-text-input id="provinsi" class="block mt-1 w-full" type="text" name="provinsi" :value="old('provinsi', $pendaftaran->provinsi)"/>
                            <x-input-error :messages="$errors->get('provinsi')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="nomor_telepon" :value="__('Nomor Telepon')" />
                            <x-text-input id="nomor_telepon" class="block mt-1 w-full" type="number" name="nomor_telepon" :value="old('nomor_telepon', $pendaftaran->nomor_telepon)"/>
                            <x-input-error :messages="$errors->get('nomor_telepon')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="nomor_hp" :value="__('Nomor HP')" />
                            <x-text-input id="nomor_hp" class="block mt-1 w-full" type="number" name="nomor_hp" :value="old('nomor_hp', $pendaftaran->nomor_hp)"/>
                            <x-input-error :messages="$errors->get('nomor_hp')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $pendaftaran->email)"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kewarganegaraan" :value="__('Kewarganegaraan')" />
                                <input id="kewarganegaraan" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="kewarganegaraan" value="WNI Asli" {{ $pendaftaran->kewarganegaraan === 'WNI Asli' ? 'checked' : null }}>WNI Asli</input><br>
                                <input id="kewarganegaraan" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="kewarganegaraan" value="WNI Keturunan" {{ $pendaftaran->kewarganegaraan === 'WNI Keturunan' ? 'checked' : null }}>WNI Keturunan</input><br>
                                <input id="kewarganegaraan" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="kewarganegaraan" value="WNA" {{ $pendaftaran->kewarganegaraan === 'WNA' ? 'checked' : null }}>WNA<input type="text" name="kewarganegaraan_luar_negeri"  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" value="{{ $pendaftaran->kewarganegaraan_luar_negeri }}"/></input><br>
                            <x-input-error :messages="$errors->get('kewarganegaraan')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                            <x-text-input id="tanggal_lahir" type="date" name="tanggal_lahir" :value="old('tanggal_lahir', $pendaftaran->tanggal_lahir)"/>
                            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                            <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir', $pendaftaran->tempat_lahir)"/>
                            <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kabupaten_tempat_lahir" :value="__('Kabupaten Tempat Lahir')" />
                            <x-text-input id="kabupaten_tempat_lahir" class="block mt-1 w-full" type="text" name="kabupaten_tempat_lahir" :value="old('kabupaten_tempat_lahir', $pendaftaran->kabupaten_tempat_lahir)"/>
                            <x-input-error :messages="$errors->get('kabupaten_tempat_lahir')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="provinsi_tempat_lahir" :value="__('Provinsi Tempat Lahir')" />
                            <x-text-input id="provinsi_tempat_lahir" class="block mt-1 w-full" type="text" name="provinsi_tempat_lahir" :value="old('provinsi_tempat_lahir', $pendaftaran->provinsi_tempat_lahir)"/>
                            <x-input-error :messages="$errors->get('provinsi_tempat_lahir')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                                <input id="jenis_kelamin" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="jenis_kelamin" value="Pria" {{ $pendaftaran->jenis_kelamin === 'Pria' ? 'checked' : null }}>Pria</input><br>
                                <input id="jenis_kelamin" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="jenis_kelamin" value="Wanita" {{ $pendaftaran->jenis_kelamin === 'Wanita' ? 'checked' : null }}>Wanita</input><br>
                            <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="status_menikah" :value="__('Status Menikah')" />
                                <input id="status_menikah" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="status_menikah" value="Belum menikah" {{ $pendaftaran->status_menikah === 'Belum menikah' ? 'checked' : null }}>Belum menikah</input><br>
                                <input id="status_menikah" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="status_menikah" value="Menikah" {{ $pendaftaran->status_menikah === 'Menikah' ? 'checked' : null }}>Menikah</input><br>
                                <input id="status_menikah" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="status_menikah" value="Lain-lain" {{ $pendaftaran->status_menikah === 'Lain-lain' ? 'checked' : null }}>Lain-lain</input><br>
                            <x-input-error :messages="$errors->get('status_menikah')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="agama" :value="__('Agama')" />
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Islam" {{ $pendaftaran->agama === 'Islam' ? 'checked' : null }}>Islam</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Katolik" {{ $pendaftaran->agama === 'Katolik' ? 'checked' : null }}>Katolik</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Kristen" {{ $pendaftaran->agama === 'Kristen' ? 'checked' : null }}>Kristen</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Hindu" {{ $pendaftaran->agama === 'Hindu' ? 'checked' : null }}>Hindu</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Budha" {{ $pendaftaran->agama === 'Budha' ? 'checked' : null }}>Budha</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Lain-lain" {{ $pendaftaran->agama === 'Lain-lain' ? 'checked' : null }}>Lain-lain</input><br>
                            <x-input-error :messages="$errors->get('agama')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('pendaftaran.index') }}">
                                {{ __('Cancel') }}
                            </a>
                            <x-primary-button class="ms-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
