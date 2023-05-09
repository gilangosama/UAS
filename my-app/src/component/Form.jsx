import logo from '../assets/img/logo diskominfo.png';
import React, { useState } from 'react';

const Form = () => {
  const [selectedOption, setSelectedOption] = useState('');

  const handleOptionChange = (event) => {
    setSelectedOption(event.target.value);
  };

  const [email, setEmail] = useState('');

  const handleEmailChange = (event) => {
    setEmail(event.target.value);
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    console.log(email);
    // kode lain untuk mengirim email
  };
  const logo = require('../assets/img/logo diskominfo.png');
  return (
    <div className="mx-auto container justify-center items-center flex mb-20">
      <div className="absolute top-16 m-auto m-w-xl p-10 border-1 bg-white rounded drop-shadow-2xl ">
        <form action="" method="post" className="justify-center w-[570px]">
          <div className="flex flex-col items-start container mx-auto justify-center items-center w-[570px]">
            <div className="justify-center font-base text-three text-center">
              <div className="flex items-center justify-center py-10">
                <img src={logo} alt="Logo-Diskominfo" className="w-[400px]"></img>
              </div>
              <h1 className="font-bold text-2xl ">Form Pendataan Aplikasi</h1>
              <p className="pb-3 text-three font-normal">Kota Sukabumi</p>
            </div>
          </div>

          <div className="flex flex-col font-base py-4 ">
            <label for="namaopd" className="pb-2 font-bold">
              Nama OPD
            </label>
            <input
              type="text"
              id="namaopd"
              className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></input>
          </div>

          <div className="flex justify-between  font-base gap-5">
            <div className="flex flex-col w-full ">
              <label for="namaaplikasi" className="font-bold">
                Nama Aplikasi
              </label>
              <input
                type="text"
                id="namaapk"
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              ></input>
            </div>

            <div className="flex flex-col w-full">
              <label for="versi" className="font-bold">
                Versi
              </label>
              <input
                type="text"
                id="versi"
                className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              ></input>
            </div>
          </div>

          <div className="flex flex-col pt-3">
            <h3 className="font-bold ">SK Walikota / Kepala unit kerja yang berkaitan dengan aplikasi :</h3>
            <div className="flex justify-between pt-2 gap-5">
              <div className="flex flex-col text-sm w-full">
                <label for="nomorsk" className="font-bold">
                  Nomor
                </label>
                <input
                  type="text"
                  id="nomor"
                  className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                ></input>
              </div>

              <div className="flex flex-col text-sm w-full">
                <label for="tahunsk" className="font-bold">
                  Tahun
                </label>
                <input
                  type="text"
                  id="tahun"
                  className="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                ></input>
              </div>
            </div>
            <div className="text-sm flex flex-col">
              <span className="pb-2 text-[12px] text-[#FF2E63]">*harap melampirkan salinan copy atau hard copy</span>
              <label for="formFile" className=" inline-block text-neutral-700 dark:text-neutral-200">
                Upload File
              </label>
              <input
                className="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                type="file"
                id="formFile"
              />
            </div>
          </div>
          <div class="pt-5 block flex flex-col ">
            <label for="kondisi" class="font-bold pb-2">
              Kondisi
            </label>
            <div class="text-sm flex gap-5 items-center pb-3">
              <div class="flex items-center ">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                ></input>
                <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                  Aktif
                </label>
              </div>
              <div class="flex items-center">
                <input
                  checked
                  id="checked-checkbox"
                  type="checkbox"
                  value=""
                  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                ></input>
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                  Tidak Aktif
                </label>
              </div>
            </div>
          </div>

          <div class="flex flex-col">
            <label for="Namaadmin" class="font-base font-bold">
              Nama Admin
            </label>
            <input
              type="text"
              id="Namaadmin"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></input>
          </div>
          <div class="flex flex-col pt-5">
            <label for="nowa" class="font-base font-bold">
              Nomor WhatsApp
            </label>
            <input
              type="text"
              id="nowa"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></input>
          </div>
          <div class="flex flex-col pt-5">
            <label htmlFor="email" className="text-gray-600 font-medium mb-2">
              Email Address
            </label>
            <input id="email" name="email" type="email" value={email} onChange={handleEmailChange} placeholder="Enter your email" className="border border-gray-300 py-2 px-3 rounded-md w-full" />
          </div>
          <div class="flex flex-col pt-5">
            <label for="jumlah" class="font-base font-bold">
              Jumlah Pengguna
            </label>
            <input
              type="number"
              id="jumlah"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></input>
          </div>

          <div class="flex flex-col pt-5">
            <label for="alamatweb" class="font-base font-bold">
              Alamat Web
            </label>
            <input
              type="text"
              id="alamatweb"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></input>
          </div>

          <div className="flex flex-col justify-center pt-5">
            <label htmlFor="dropdown" className="font-bold Font-base">
              Jenis Layanan
            </label>
            <select
              id="dropdown"
              name="dropdown"
              value={selectedOption}
              onChange={handleOptionChange}
              className="rounded bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
              <option value="">Pilih Salah Satu</option>
              <option value="option1">Untuk Pemerintahan(G2G)</option>
              <option value="option2">Untuk Pelaku Usaha(G2B)</option>
              <option value="option3">Untuk Masyarakat Umum (G2C)</option>
              <option value="option4">Untuk Pegawai ASN dan Non ASN (G2E)</option>
            </select>
          </div>
          <div class="flex flex-col pt-5">
            <label for=" uraian" class="font-base font-bold">
              Uraian singkat aplikasi
            </label>
            <textarea
              name="uraian"
              id="uraian"
              cols="30"
              rows="10"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></textarea>
          </div>

          <div class="pt-5 flex flex-col">
            <label for="sop" class="pb-3 font-base font-bold">
              Apakah aplikasi ini memiliki dokumen Proses Bisnis atau SOP yang berkaitan ?
            </label>
            <label for="formFilesop" class="text-sm inline-block text-neutral-700 dark:text-neutral-200">
              Upload File
            </label>
            <input
              class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
              type="file"
              id="sop"
            />
            <span class="pb-2 text-[12px] text-[#FF2E63]">*lampirkan jika ada</span>
          </div>

          <div className="flex flex-col justify-center pt-5">
            <label htmlFor="dropdown" className="font-bold Font-base">
              Kepemilikan Aplkasi
            </label>
            <select
              id="dropdown"
              name="dropdown"
              value={selectedOption}
              onChange={handleOptionChange}
              className="rounded bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
              <option value="">Pilih Salah Satu</option>
              <option value="option1">Pusat</option>
              <option value="option2">Provisi</option>
              <option value="option3">Kota</option>
            </select>
          </div>
          <div class="pt-5 flex flex-col">
            <label for="sop" class="pb-3 font-base font-bold">
              Tampilan layar (screen shoot) aplikasi :
            </label>
            <label for="formFilesop" class="text-sm inline-block text-neutral-700 dark:text-neutral-200">
              Upload File
            </label>
            <input
              class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
              type="file"
              id="sop"
            />
            <span class="pb-2 text-[12px] text-[#FF2E63]">*(halaman awal, proses yang terjadi, contoh keluaran)</span>
          </div>
          <div class="pt-5 flex flex-col">
            <label for="sop" class="pb-3 font-base font-bold">
              Rapat Evaluasi yang berkaitan dengan aplikasi:
            </label>
            <label for="formFilesop" class="text-sm inline-block text-neutral-700 dark:text-neutral-200">
              Upload File
            </label>
            <input
              class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
              type="file"
              id="sop"
            />
            <span class="pb-2 text-[12px] text-[#FF2E63]">*(Foto rapat, notulen, daftar hadir)</span>
          </div>
          <div class="flex flex-col pt-5">
            <label for="alamatweb" class="font-base font-bold">
              Apakah ada pihak yang dapat dijadikan tempat konsultasi jika suatu saat terjadi error / bug?
            </label>
            <input
              type="text"
              id="alamatweb"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></input>
          </div>
          <div class="flex flex-col pt-5">
            <label for="alamatweb" class="font-base font-bold">
              Apakah ada kendala dalam penggunaan/ pengeloaan aplikasi ?
            </label>
            <input
              type="text"
              id="alamatweb"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            ></input>
          </div>
          <div className=" flex flex-row gap-5">
            <button type="submit" className="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md">
              Kirim
            </button>
            <button type="submit" className="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md">
              Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default Form;
