<!--15 Desember 2024  -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="styles/index.css" />
	<link rel="apple-touch-icon" sizes="180x180" href="public/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="public/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="public/favicon-16x16.png" />
	<link rel="manifest" href="public/site.webmanifest" />
	<script src="https://cdn.tailwindcss.com"></script>

	<title>Magank | Profile</title>
</head>

<body class="min-h-screen flex flex-col">

	<main class="relative bg-[#f3ffde] w-full min-h-screen flex flex-col items-center justify-center">
		<!-- Background -->
		<div class="absolute inset-0 bg-cover bg-center h-full w-full z-0"
			style="black" oncontextmenu="return false">
		</div>

		<!-- Navbar Section (EXP and Profile Info) -->


		<!-- Profile Avatar Section -->



		<!-- Buttons Section -->
		<div class="flex flex-wrap justify-center gap-4 relative z-10">




			<button id="button-open-daftar-pencapaian"
				class="bg-[#D9D9D9] w-16 h-16 lg:w-20 lg:h-20 rounded-xl hover:opacity-75 transition-all flex items-center justify-center">
				<img src="public/images/icon3.png" alt="Ikon Daftar Pencapaian" class="w-10 h-10 lg:w-12 lg:h-12">
			</button>
		</div>
	</main>


<!-- testtttt -->
	<!-- Modal Daftar Pencapaian -->
	<div id="modal-daftar-pencapaian" class="fixed inset-0 flex items-center justify-center z-40 hidden">
		<!-- Overlay Gelap -->
		<div class="absolute inset-0 bg-black bg-opacity-50 z-10 "></div>

		<!-- Konten Modal -->
		<div class="relative w-[800px] max-w-full p-6 rounded-[30px] bg-white bg-opacity-60 z-20 shadow-2xl">
			<!-- Header Modal -->
			<div class="flex justify-between items-center mb-6">
				<!-- Judul Header -->
				<h2 class="text-2xl font-bold text-black flex items-center">
					<img src="public/images/icon3.png" alt="Ikon Pencapaian" class="w-8 h-8 mr-3" />
					Daftar Pencapaian
				</h2>

				<!-- Tombol Close dan Tambah -->
				<div class="flex items-center gap-3">
					<!-- Tombol Tambah -->
					<button id="button-open-tambah-pencapaian"
						class="hover:opacity-75 p-1 bg-[#EEA628] rounded-full flex items-center justify-center">
						<img src="./public/images/Button_tambah.png" alt="Tambah" class="w-6 h-6 object-contain">
					</button>


					<!-- Tombol Close (X) -->
					<button type="button" id="button-close-daftar-pencapaian"
						class="hover:opacity-75 h-8 w-8 bg-white rounded-full flex items-center justify-center text-xl font-bold">
						<img src="public/images/Button_close.png" alt="">
					</button>

				</div>
			</div>

			<!-- Content -->
			   @foreach ($achievements as $key)
			<div class="relative bg-white bg-opacity-80 border border-gray-300 rounded-lg p-4 mb-4">
				<!-- Tombol Edit di Pojok Kanan Atas -->
				<button
					class="btn-edit-pencapaian absolute top-4 right-4 h-8 w-8 bg-white rounded-full shadow hover:bg-gray-100 flex items-center justify-center"
                    data-target="#modal-edit-pencapaian{{ $key->id }}" >
					<img src="/public/images/editIcon.png"  alt="Edit" class="h-5 w-5">
				</button>
				<div class="flex">
					<div class="mr-4">
						<img src="{{asset("public/images/profile-head.png")}}" alt="UI/UX Icon" class="w-12 h-12">
					</div>
					<div>
						<h4 class="text-lg font-bold text-black">{{$key->award_name}}</h4>
						<p class="text-lg text-gray-700"> {{$key->categories}}</p>
						<p class="text-sm text-gray-700">{{$key->finis_time}}</p>
						<ul class="list-disc list-inside text-sm text-gray-700">
							{{-- <li>Juara 1 pada kompetisi UI/UX Designer</li>
							<li>Perwakilan dari kampus Telkom University</li>
							<li>Menjadi salah satu produk yang banyak perhatian dari tim juri dan peserta lain karena
								ide produk unik</li> --}}
                                {{$key->description}}
						</ul>

					</div>
				</div>
			</div>
            @endforeach


			<!-- Pencapaian 2 -->

		</div>
	</div>
	</div>

	<!-- Modal Tambah Pencapaian-->
	<div id="modal-pencapaian" class="fixed inset-0 flex items-center justify-center z-50 hidden">
		<!-- Overlay Gelap -->
		<div class="absolute inset-0 bg-[rgba(0,0,0,0.7)] z-10"></div>

		<!-- Konten Modal -->
		<div class="relative w-[1000px] h-[500px] max-w-full p-6 rounded-[30px] bg-white bg-opacity-60 z-20 shadow-2xl">
			<!-- Tombol Close -->
			<button id="button-close-modal-pencapaian"
				class="absolute top-4 right-4 text-3xl text-black bg-white hover:opacity-75 h-8 w-8 rounded-full flex items-center justify-center">
				<img src="public/images/Button_close.png" alt="">
			</button>


			<!-- Header Modal -->
			<h2 class="text-2xl font-bold mb-6 flex items-center text-black">
				<img src="public/images/icon3.png" alt="Ikon Pengalaman" class="w-8 h-8 mr-3" />
				Tambah Pencapaian
			</h2>

			<!-- Form Tambah Pencapaian -->
			<form>
				<div class="mb-4">
					<label for="nama-pengalaman" class="block text-lg font-medium text-black">Nama Penghargaan</label>
					<input type="text" id="nama-pengalaman"
						class="mt-2 block w-full border border-gray-300 rounded-lg p-2 bg-white bg-opacity-40 focus:ring-2 focus:ring-blue-500 outline-none">
				</div>

				<div class="grid grid-cols-2 gap-4 mb-4">
					<div>
						<label for="posisi" class="block text-lg font-medium text-black">Kategori/Prestasi yang
							diraih</label>
						<input type="text" id="posisi"
							class="mt-2 block w-full border border-gray-300 rounded-lg p-2 bg-white bg-opacity-40 focus:ring-2 focus:ring-blue-500 outline-none">
					</div>
					<div>
						<label for="durasi" class="block text-lg font-medium text-black">Selesai</label>
						<input type="number" id="durasi"
							class="mt-2 block w-full border border-gray-300 rounded-lg p-2 bg-white bg-opacity-40 focus:ring-2 focus:ring-blue-500 outline-none">
					</div>
				</div>

				<div class="mb-4">
					<label for="deskripsi-pengalaman" class="block text-lg font-medium text-black">Deskripsi</label>
					<textarea id="deskripsi-pengalaman" rows="4"
						class="mt-2 block w-full border border-gray-300 rounded-lg p-2 bg-white bg-opacity-40 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
				</div>

				<!-- Tombol Simpan -->
				<div class="flex justify-end">
					<button type="submit"
						class="px-6 py-3 bg-yellow-500 text-white text-lg rounded-lg hover:bg-yellow-600 transition">
						Simpan
					</button>
				</div>
			</form>
		</div>
	</div>
    {{-- edit pencapaian --}}
    <div id="modal-edit-pencapaian{{$key->id}}" class="fixed inset-0 flex items-center justify-center z-50 hidden">
		<!-- Overlay Gelap -->
		<div class="absolute inset-0 bg-[rgba(0,0,0,0.7)] z-10"></div>

		<!-- Konten Modal -->
		<div class="relative w-[1000px] h-[500px] max-w-full p-6 rounded-[30px] bg-white bg-opacity-60 z-20 shadow-2xl">
			<!-- Tombol Close -->
			<button id="button-close-modal-edit-pencapaian"
				class="absolute top-4 right-4 text-3xl text-black bg-white hover:opacity-75 h-8 w-8 rounded-full flex items-center justify-center">
				<img src="public/images/Button_close.png" alt="">
			</button>


			<!-- Header Modal -->
			<h2 class="text-2xl font-bold mb-6 flex items-center text-black">
				<img src="{{asset("public/images/icon3.png")}}" alt="Ikon Pengalaman" class="w-8 h-8 mr-3" />
				Edit Pencapaian
			</h2>

			<!-- Form Edits Pencapaian -->
            <form action="{{ route('student.award.update', $key->achievement_id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                  <label for="nama-pengalaman" class="block text-lg font-medium text-black">Nama Penghargaan</label>
                  <input type="text" id="nama-pengalaman" name="award_name"
                    class="mt-2 block w-full border border-gray-300 rounded-lg p-2 bg-white bg-opacity-40 focus:ring-2 focus:ring-blue-500 outline-none"
                    value="{{ old('award_name', $key->award_name) }}">
                </div>

                <!-- Input untuk Kategori/Prestasi -->
                <div class="grid grid-cols-2 gap-4 mb-4">
                  <div>
                    <label for="posisi" class="block text-lg font-medium text-black">Kategori/Prestasi yang diraih</label>
                    <input type="text" id="posisi" name="categories"
                      class="mt-2 block w-full border border-gray-300 rounded-lg p-2 bg-white bg-opacity-40 focus:ring-2 focus:ring-blue-500 outline-none"
                      value="{{ old('categories', $key->categories) }}">
                  </div>

                  <!-- Input untuk Waktu Selesai -->
                  <div>
                    <label for="durasi" class="block text-lg font-medium text-black">Selesai</label>
                    <input type="number" id="durasi" name="finis_time"
                      class="mt-2 block w-full border border-gray-300 rounded-lg p-2 bg-white bg-opacity-40 focus:ring-2 focus:ring-blue-500 outline-none"
                      value="{{ old('finis_time', $key->finis_time) }}">
                  </div>
                </div>

                <!-- Input untuk Deskripsi -->
                <div class="mb-4">
                  <label for="deskripsi-pengalaman" class="block text-lg font-medium text-black">Deskripsi</label>
                  <textarea id="deskripsi-pengalaman" rows="4" name="description"
                    class="mt-2 block w-full border border-gray-300 rounded-lg p-2 bg-white bg-opacity-40 focus:ring-2 focus:ring-blue-500 outline-none">{{ old('description', $key->description) }}</textarea>
                </div>

                <!-- Tombol Simpan -->
                <div class="flex justify-end">
                  <button type="submit"
                    class="px-6 py-3 bg-yellow-500 text-white text-lg rounded-lg hover:bg-yellow-600 transition">
                    Simpan
                  </button>
                </div>
              </form>


		</div>
	</div>
	<script src="js/index.js"></script>
	<script>


		// Pencapaian
		document.addEventListener('DOMContentLoaded', function () {
			const modalTambah = document.getElementById("modal-pencapaian");
			const buttonCloseTambah = document.getElementById("button-close-modal-pencapaian");

			const modalDaftar = document.getElementById("modal-daftar-pencapaian");
			const buttonOpenDaftar = document.getElementById("button-open-daftar-pencapaian");
			const buttonCloseDaftar = document.getElementById("button-close-daftar-pencapaian");
			const buttonTambahPencapaian = document.getElementById("button-tambah-pencapaian");

			document.getElementById('button-open-tambah-pencapaian').addEventListener('click', function () {
				modalTambah.classList.remove('hidden');
				modalDaftar.classList.add('hidden');
			});

			buttonOpenDaftar.addEventListener("click", () => {
				modalDaftar.classList.remove("hidden");
				modalTambah.classList.add("hidden");
			});

			buttonCloseDaftar.addEventListener("click", () => {
				modalDaftar.classList.add("hidden");
			});

			buttonCloseTambah.addEventListener("click", () => {
				modalTambah.classList.add("hidden");
			});

			const overlayTambah = document.querySelector("#modal-pencapaian .absolute");
			overlayTambah.addEventListener("click", () => {
				modalTambah.classList.add("hidden");
			});

			const overlayDaftar = document.querySelector("#modal-daftar-pencapaian .absolute");
			overlayDaftar.addEventListener("click", () => {
				modalDaftar.classList.add("hidden");
			});

			window.addEventListener('click', function (event) {
				if (event.target === modalTambah) {
					modalTambah.classList.add('hidden');
				}
				if (event.target === modalDaftar) {
					modalDaftar.classList.add('hidden');
				}
			});
		});

        // edit pencapaina
        const modalEditPencapaian = document.getElementById("modal-edit-pencapaian");
			const btnEditPencapaian = document.querySelectorAll(".btn-edit-pencapaian");

			btnEditPencapaian.forEach(button => {
				button.addEventListener("click", () => {
					modalEditPencapaian.classList.remove("hidden");
				});
			});

			const buttonCloseEdit = document.getElementById("button-close-modal-edit-pencapaian");

			if (buttonCloseEdit) {
				buttonCloseEdit.addEventListener("click", () => {
					modalEditPencapaian.classList.add("hidden");
				});
			}

			const overlayEdit = document.querySelector("#modal-edit-pencapaian .absolute");
			if (overlayEdit) {
				overlayEdit.addEventListener("click", () => {
					modalEditPencapaian.classList.add("hidden");
				});
			}

			window.addEventListener('click', function (event) {
				if (event.target === modalEditPencapaian) {
					modalEditPencapaian.classList.add("hidden");
				}
			});


	</script>
</body>

