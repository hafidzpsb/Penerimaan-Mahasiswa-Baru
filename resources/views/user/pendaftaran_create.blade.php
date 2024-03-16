<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Form Pendaftaran') }}
            </h2>
        </div>
    </x-slot>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('pendaftaran.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-input-label for="nama_lengkap" :value="__('Nama Lengkap')" />
                            <x-text-input id="nama_lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap" :value="old('nama_lengkap')" required autofocus />
                            <x-input-error :messages="$errors->get('nama_lengkap')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="foto" :value="__('Foto')" />
                            <input id="foto" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="file" name="foto" :value="old('foto')" required/>
                            <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="alamat_ktp" :value="__('Alamat KTP')" />
                            <x-text-input id="alamat_ktp" class="block mt-1 w-full" type="text" name="alamat_ktp" required/>
                            <x-input-error :messages="$errors->get('alamat_ktp')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="alamat" :value="__('Alamat Domisili')" />
                            <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" required/>
                            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="provinsi" :value="__('Provinsi')" />
                            <select id="provinsi" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="provinsi" required>
                                <option selected class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">Pilih Provinsi</option>
                                @foreach ($array_provinsi as $provinsi)
                                    <option value="{{ $provinsi['name'] }}" data-id="{{ $provinsi['id'] }}" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ $provinsi['name'] }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('provinsi')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kabupaten" :value="__('Kabupaten')" />
                            <select id="kabupaten" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="kabupaten" required>
                                <option selected class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">Pilih Kabupaten/Kota</option>
                            </select>
                            <x-input-error :messages="$errors->get('kabupaten')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kecamatan" :value="__('Kecamatan')" />
                            <select id="kecamatan" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="kecamatan" required>
                                <option selected class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">Pilih Kecamatan</option>
                            </select>
                            <x-input-error :messages="$errors->get('kecamatan')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="nomor_telepon" :value="__('Nomor Telepon')" />
                            <x-text-input id="nomor_telepon" class="block mt-1 w-full" type="number" name="nomor_telepon" required/>
                            <x-input-error :messages="$errors->get('nomor_telepon')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="nomor_hp" :value="__('Nomor HP')" />
                            <x-text-input id="nomor_hp" class="block mt-1 w-full" type="number" name="nomor_hp" required/>
                            <x-input-error :messages="$errors->get('nomor_hp')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kewarganegaraan" :value="__('Kewarganegaraan')" />
                                <input id="kewarganegaraan" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="kewarganegaraan" value="WNI Asli" required>WNI Asli</input><br>
                                <input id="kewarganegaraan" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="kewarganegaraan" value="WNI Keturunan" required>WNI Keturunan</input><br>
                                <input id="kewarganegaraan" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="kewarganegaraan" value="WNA" required>WNA<input type="text" name="kewarganegaraan_luar_negeri"  class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" /></input><br>
                            <x-input-error :messages="$errors->get('kewarganegaraan')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                            <x-text-input id="tanggal_lahir" type="date" name="tanggal_lahir" required/>
                            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                            <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" required/>
                            <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="provinsi_tempat_lahir" :value="__('Provinsi Tempat Lahir')" />
                            <select id="provinsi_tempat_lahir" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="provinsi_tempat_lahir" required>
                                <option selected class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">Pilih Provinsi</option>
                                @foreach ($array_provinsi as $provinsi)
                                    <option value="{{ $provinsi['name'] }}" data-id="{{ $provinsi['id'] }}" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ $provinsi['name'] }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('provinsi_tempat_lahir')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="kabupaten_tempat_lahir" :value="__('Kabupaten Tempat Lahir')" />
                            <select id="kabupaten_tempat_lahir" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="kabupaten_tempat_lahir" required>
                                <option selected class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">Pilih Kabupaten/Kota</option>
                            </select>
                            <x-input-error :messages="$errors->get('kabupaten_tempat_lahir')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                                <input id="jenis_kelamin" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="jenis_kelamin" value="Pria" required>Pria</input><br>
                                <input id="jenis_kelamin" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="jenis_kelamin" value="Wanita" required>Wanita</input><br>
                            <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="status_menikah" :value="__('Status Menikah')" />
                                <input id="status_menikah" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="status_menikah" value="Belum menikah" required>Belum menikah</input><br>
                                <input id="status_menikah" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="status_menikah" value="Menikah" required>Menikah</input><br>
                                <input id="status_menikah" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="status_menikah" value="Lain-lain" required>Lain-lain</input><br>
                            <x-input-error :messages="$errors->get('status_menikah')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="agama" :value="__('Agama')" />
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Islam" required>Islam</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Katolik" required>Katolik</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Kristen" required>Kristen</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Hindu" required>Hindu</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Budha" required>Budha</input><br>
                                <input id="agama" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="radio" name="agama" value="Lain-lain" required>Lain-lain</input><br>
                            <x-input-error :messages="$errors->get('agama')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Daftar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#provinsi').change(function (e) {
                var opsi = $(this).find('option:selected');
                var id = opsi.data('id');
                $.ajax({
                    url: 'https://api.binderbyte.com/wilayah/kabupaten?api_key=36092121df2967d0cd33e5b8123e2f1881434b96318f342045fa8bbd00d51cc8&id_provinsi=' + id,
                    method: 'GET',
                    success: function (data) {
                        kabupaten = data['value'];
                        $('#kabupaten').children('option:not(:first)').remove().end();
                        $.each(kabupaten, function (index, kabupatenObj) {
                            $('#kabupaten').append('<option value="' + kabupatenObj.name + '" data-id="' + kabupatenObj.id + '"> ' + kabupatenObj.name + ' </option>')
                        });
                    }
                });
            });
            $('#kabupaten').change(function (e) {
                var opsi = $(this).find('option:selected');
                var id = opsi.data('id');
                $.ajax({
                    url: 'https://api.binderbyte.com/wilayah/kecamatan?api_key=36092121df2967d0cd33e5b8123e2f1881434b96318f342045fa8bbd00d51cc8&id_kabupaten=' + id,
                    method: 'GET',
                    success: function (data) {
                        kecamatan = data['value'];
                        $('#kecamatan').children('option:not(:first)').remove().end();
                        $.each(kecamatan, function (index, kecamatanObj) {
                            $('#kecamatan').append('<option value="' + kecamatanObj.name + '"> ' + kecamatanObj.name + ' </option>')
                        });
                    }
                });
            });
            $('#provinsi_tempat_lahir').change(function (e) {
                var opsi = $(this).find('option:selected');
                var id = opsi.data('id');
                $.ajax({
                    url: 'https://api.binderbyte.com/wilayah/kabupaten?api_key=36092121df2967d0cd33e5b8123e2f1881434b96318f342045fa8bbd00d51cc8&id_provinsi=' + id,
                    method: 'GET',
                    success: function (data) {
                        kabupaten = data['value'];
                        $('#kabupaten_tempat_lahir').children('option:not(:first)').remove().end();
                        $.each(kabupaten, function (index, kabupatenObj) {
                            $('#kabupaten_tempat_lahir').append('<option value="' + kabupatenObj.name + '" data-id="' + kabupatenObj.id + '"> ' + kabupatenObj.name + ' </option>')
                        });
                    }
                });
            });
        });
    </script>

</x-app-layout>
