<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Koleksi: ') . $koleksi->nama }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('koleksi.update', $koleksi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold border-b pb-2 mb-4 text-indigo-600">Detail Barang</h3>
                            
                            <div class="mb-4">
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Barang:</label>
                                <input type="text" name="nama" id="nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required value="{{ old('nama', $koleksi->nama) }}">
                                @error('nama') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi:</label>
                                <textarea name="deskripsi" id="deskripsi" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('deskripsi', $koleksi->deskripsi) }}</textarea>
                                @error('deskripsi') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="tahun_perolehan" class="block text-sm font-medium text-gray-700">Tahun Perolehan:</label>
                                <input type="number" name="tahun_perolehan" id="tahun_perolehan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" value="{{ old('tahun_perolehan', $koleksi->tahun_perolehan) }}">
                                @error('tahun_perolehan') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="kondisi" class="block text-sm font-medium text-gray-700">Kondisi:</label>
                                <select name="kondisi" id="kondisi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                                    <option value="Baik" @if(old('kondisi', $koleksi->kondisi) == 'Baik') selected @endif>Baik</option>
                                    <option value="Sedang" @if(old('kondisi', $koleksi->kondisi) == 'Sedang') selected @endif>Sedang</option>
                                    <option value="Rusak" @if(old('kondisi', $koleksi->kondisi) == 'Rusak') selected @endif>Rusak</option>
                                </select>
                                @error('kondisi') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold border-b pb-2 mb-4 text-indigo-600">Ganti Foto</h3>
                            
                            <div class="mb-4">
                                <label for="foto" class="block text-sm font-medium text-gray-700">Pilih Foto Baru:</label>
                                <input type="file" name="foto" id="foto" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                @error('foto') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="mb-4">
                                <p class="text-sm font-medium text-gray-700">Foto Saat Ini:</p>
                                @if ($koleksi->foto)
                                    <img src="{{ asset('storage/koleksi_photos/' . $koleksi->foto) }}" alt="{{ $koleksi->nama }}" class="w-32 h-32 object-cover rounded-lg shadow-md mt-2">
                                    <p class="text-xs text-gray-500 mt-1">Abaikan jika tidak ingin mengganti.</p>
                                @else
                                    <p class="text-sm text-gray-500 mt-2">Belum ada foto yang diunggah.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-end mt-6 pt-4 border-t border-gray-200">
                        <a href="{{ route('koleksi.index') }}" class="mr-3 text-sm text-gray-600 hover:text-gray-900">Batal</a>
                        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 transition duration-150">Update Koleksi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>