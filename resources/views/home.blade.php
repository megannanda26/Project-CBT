@extends('layout.app')

@section('content')
<div class="w-full min-h-screen bg-slate-50 inline-flex flex-col justify-center items-center">

  <div class="self-stretch p-20 bg-white inline-flex justify-start items-center gap-16">
    <div class="flex-1 inline-flex flex-col justify-start items-start gap-6">
      <div class="self-stretch justify-start text-slate-900 text-5xl font-extrabold font-['Plus_Jakarta_Sans']">Kembangkan Bakat & Minatmu Bersama Ekskul SMK Wikrama</div>
      <div class="self-stretch justify-start text-slate-600 text-base font-normal font-['Plus_Jakarta_Sans'] leading-6">Temukan wadah kreativitas dan prestasi yang tepat untukmu. Akses pendaftaran, jadwal latihan, presensi kehadiran, hingga info tugas ekstrakurikuler dalam satu platform modern terintegrasi.</div>
      <div class="size- inline-flex justify-start items-start gap-4">
        <div class="size- px-7 py-3.5 bg-blue-900 rounded-lg flex justify-center items-center">
          <div class="justify-start text-white text-base font-semibold font-['Plus_Jakarta_Sans']">Jelajahi Ekskul</div>
        </div>
        <div class="size- px-6 py-3.5 rounded-lg outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-center items-center">
          <div class="justify-start text-slate-900 text-base font-semibold font-['Plus_Jakarta_Sans']">Panduan Pendaftaran</div>
        </div>
      </div>
    </div>
    <div class="w-[596px] h-96 rounded-xl shadow-[2px_4px_10px_0px_rgba(0,0,0,0.25)] inline-flex flex-col justify-start items-start overflow-hidden">
      <img class="w-[599px] h-96" src="https://placehold.co/599x400" />
    </div>
  </div>
  <div class="self-stretch px-20 py-10 inline-flex justify-start items-start gap-6">
    <div class="flex-1 p-6 bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-start items-center gap-4">
      <div class="size- p-3 bg-blue-900/5 rounded-lg inline-flex flex-col justify-center items-center">
        <div class="size-6 relative overflow-hidden">
          <div class="w-3 h-5 left-[6px] top-[2px] absolute outline outline-2 outline-offset-[-1px] outline-blue-900"></div>
        </div>
      </div>
      <div class="flex-1 inline-flex flex-col justify-start items-start gap-0.5">
        <div class="self-stretch justify-start text-slate-900 text-3xl font-bold font-['Plus_Jakarta_Sans']">25+</div>
        <div class="self-stretch justify-start text-slate-600 text-sm font-medium font-['Plus_Jakarta_Sans']">Ekskul Aktif</div>
      </div>
    </div>
    <div class="flex-1 p-6 bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-start items-center gap-4">
      <div class="size- p-3 bg-blue-900/5 rounded-lg inline-flex flex-col justify-center items-center">
        <div class="size-6 relative overflow-hidden">
          <div class="w-5 h-4 left-[2px] top-[3px] absolute outline outline-2 outline-offset-[-1px] outline-blue-900"></div>
        </div>
      </div>
      <div class="flex-1 inline-flex flex-col justify-start items-start gap-0.5">
        <div class="self-stretch justify-start text-slate-900 text-3xl font-bold font-['Plus_Jakarta_Sans']">1,200+</div>
        <div class="self-stretch justify-start text-slate-600 text-sm font-medium font-['Plus_Jakarta_Sans']">Siswa Aktif</div>
      </div>
    </div>
    <div class="flex-1 p-6 bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-start items-center gap-4">
      <div class="size- p-3 bg-blue-900/5 rounded-lg inline-flex flex-col justify-center items-center">
        <div class="size-6 relative overflow-hidden">
          <div class="size-5 left-[2.39px] top-[2px] absolute outline outline-2 outline-offset-[-1px] outline-blue-900"></div>
        </div>
      </div>
      <div class="flex-1 inline-flex flex-col justify-start items-start gap-0.5">
        <div class="self-stretch justify-start text-slate-900 text-3xl font-bold font-['Plus_Jakarta_Sans']">150+</div>
        <div class="self-stretch justify-start text-slate-600 text-sm font-medium font-['Plus_Jakarta_Sans']">Prestasi Juara</div>
      </div>
    </div>
    <div class="flex-1 p-6 bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-start items-center gap-4">
      <div class="size- p-3 bg-blue-900/5 rounded-lg inline-flex flex-col justify-center items-center">
        <div class="size-6 relative overflow-hidden">
          <div class="size-5 left-[3px] top-[3px] absolute outline outline-2 outline-offset-[-1px] outline-blue-900"></div>
        </div>
      </div>
      <div class="flex-1 inline-flex flex-col justify-start items-start gap-0.5">
        <div class="self-stretch justify-start text-slate-900 text-3xl font-bold font-['Plus_Jakarta_Sans']">50+</div>
        <div class="self-stretch justify-start text-slate-600 text-sm font-medium font-['Plus_Jakarta_Sans']">Pembina & Mentor</div>
      </div>
    </div>
  </div>
  <div class="self-stretch px-20 py-14 flex flex-col justify-start items-start gap-8">
    <div class="self-stretch inline-flex justify-between items-end">
      <div class="size- inline-flex flex-col justify-start items-start gap-2">
        <div class="justify-start text-blue-900 text-sm font-bold font-['Plus_Jakarta_Sans'] uppercase">Pilihan Terbaik</div>
        <div class="justify-start text-slate-900 text-3xl font-extrabold font-['Plus_Jakarta_Sans']">Katalog Ekskul Terpopuler</div>
      </div>
      <div class="size- flex justify-start items-start gap-2">
        <div class="size- px-4 py-2 bg-blue-900 rounded-[99px] border-slate-200 flex justify-start items-start">
          <div class="justify-start text-white text-xs font-semibold font-['Plus_Jakarta_Sans']">Semua</div>
        </div>
        <div class="size- px-4 py-2 bg-white rounded-[99px] outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-start items-start">
          <div class="justify-start text-slate-600 text-xs font-semibold font-['Plus_Jakarta_Sans']">Olahraga</div>
        </div>
        <div class="size- px-4 py-2 bg-white rounded-[99px] outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-start items-start">
          <div class="justify-start text-slate-600 text-xs font-semibold font-['Plus_Jakarta_Sans']">Seni</div>
        </div>
        <div class="size- px-4 py-2 bg-white rounded-[99px] outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-start items-start">
          <div class="justify-start text-slate-600 text-xs font-semibold font-['Plus_Jakarta_Sans']">Teknologi</div>
        </div>
        <div class="size- px-4 py-2 bg-white rounded-[99px] outline outline-1 outline-offset-[-1px] outline-slate-200 flex justify-start items-start">
          <div class="justify-start text-slate-600 text-xs font-semibold font-['Plus_Jakarta_Sans']">Akademik</div>
        </div>
      </div>
    </div>
    <div class="self-stretch inline-flex flex-col justify-start items-start">
      <div class="self-stretch bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 inline-flex flex-col justify-start items-start overflow-hidden">
        <img class="self-stretch h-44" src="https://placehold.co/411x180" />
        <div class="self-stretch p-5 flex flex-col justify-start items-start gap-4">
          <div class="self-stretch flex flex-col justify-start items-start gap-2">
            <div class="size- inline-flex justify-start items-start gap-2">
              <div class="size- px-2 py-1 bg-blue-900/5 rounded-md flex justify-start items-start">
                <div class="justify-start text-blue-900 text-xs font-semibold font-['Plus_Jakarta_Sans']">Teknologi</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-900 text-lg font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Java Script Club</div>
          </div>
          <div class="self-stretch inline-flex justify-start items-center gap-1.5">
            <div class="size-4 relative overflow-hidden">
              <div class="w-3.5 h-3 left-[1.33px] top-[2px] absolute outline outline-2 outline-offset-[-1px] outline-slate-600"></div>
            </div>
            <div class="flex-1 justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans']">120 Siswa Aktif</div>
          </div>
          <div class="self-stretch px-4 py-2.5 bg-yellow-400 rounded-lg inline-flex justify-center items-center">
            <div class="justify-start text-slate-900 text-sm font-semibold font-['Plus_Jakarta_Sans']">Daftar Sekarang</div>
          </div>
        </div>
      </div>
      <div class="self-stretch bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 inline-flex flex-col justify-start items-start overflow-hidden">
        <img class="self-stretch h-44" src="https://placehold.co/411x180" />
        <div class="self-stretch p-5 flex flex-col justify-start items-start gap-4">
          <div class="self-stretch flex flex-col justify-start items-start gap-2">
            <div class="size- inline-flex justify-start items-start gap-2">
              <div class="size- px-2 py-1 bg-blue-900/5 rounded-md flex justify-start items-start">
                <div class="justify-start text-blue-900 text-xs font-semibold font-['Plus_Jakarta_Sans']">Olahraga</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-900 text-lg font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Basket </div>
          </div>
          <div class="self-stretch inline-flex justify-start items-center gap-1.5">
            <div class="size-4 relative overflow-hidden">
              <div class="w-3.5 h-3 left-[1.33px] top-[2px] absolute outline outline-2 outline-offset-[-1px] outline-slate-600"></div>
            </div>
            <div class="flex-1 justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans']">85 Siswa Aktif</div>
          </div>
          <div class="self-stretch px-4 py-2.5 bg-yellow-400 rounded-lg inline-flex justify-center items-center">
            <div class="justify-start text-slate-900 text-sm font-semibold font-['Plus_Jakarta_Sans']">Daftar Sekarang</div>
          </div>
        </div>
      </div>
      <div class="self-stretch bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 inline-flex flex-col justify-start items-start overflow-hidden">
        <img class="self-stretch h-44" src="https://placehold.co/411x180" />
        <div class="self-stretch p-5 flex flex-col justify-start items-start gap-4">
          <div class="self-stretch flex flex-col justify-start items-start gap-2">
            <div class="size- inline-flex justify-start items-start gap-2">
              <div class="size- px-2 py-1 bg-blue-900/5 rounded-md flex justify-start items-start">
                <div class="justify-start text-blue-900 text-xs font-semibold font-['Plus_Jakarta_Sans']">Seni</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-900 text-lg font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Multimedia & Sinematografi</div>
          </div>
          <div class="self-stretch inline-flex justify-start items-center gap-1.5">
            <div class="size-4 relative overflow-hidden">
              <div class="w-3.5 h-3 left-[1.33px] top-[2px] absolute outline outline-2 outline-offset-[-1px] outline-slate-600"></div>
            </div>
            <div class="flex-1 justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans']">98 Siswa Aktif</div>
          </div>
          <div class="self-stretch px-4 py-2.5 bg-yellow-400 rounded-lg inline-flex justify-center items-center">
            <div class="justify-start text-slate-900 text-sm font-semibold font-['Plus_Jakarta_Sans']">Daftar Sekarang</div>
          </div>
        </div>
      </div>
      <div class="self-stretch bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 inline-flex flex-col justify-start items-start overflow-hidden">
        <img class="self-stretch h-44" src="https://placehold.co/411x180" />
        <div class="self-stretch p-5 flex flex-col justify-start items-start gap-4">
          <div class="self-stretch flex flex-col justify-start items-start gap-2">
            <div class="size- inline-flex justify-start items-start gap-2">
              <div class="size- px-2 py-1 bg-blue-900/5 rounded-md flex justify-start items-start">
                <div class="justify-start text-blue-900 text-xs font-semibold font-['Plus_Jakarta_Sans']">Akademik</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-900 text-lg font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">English Club Wikrama</div>
          </div>
          <div class="self-stretch inline-flex justify-start items-center gap-1.5">
            <div class="size-4 relative overflow-hidden">
              <div class="w-3.5 h-3 left-[1.33px] top-[2px] absolute outline outline-2 outline-offset-[-1px] outline-slate-600"></div>
            </div>
            <div class="flex-1 justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans']">45 Siswa Aktif</div>
          </div>
          <div class="self-stretch px-4 py-2.5 bg-yellow-400 rounded-lg inline-flex justify-center items-center">
            <div class="justify-start text-slate-900 text-sm font-semibold font-['Plus_Jakarta_Sans']">Daftar Sekarang</div>
          </div>
        </div>
      </div>
      <div class="self-stretch bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 inline-flex flex-col justify-start items-start overflow-hidden">
        <img class="self-stretch h-44" src="https://placehold.co/411x180" />
        <div class="self-stretch p-5 flex flex-col justify-start items-start gap-4">
          <div class="self-stretch flex flex-col justify-start items-start gap-2">
            <div class="size- inline-flex justify-start items-start gap-2">
              <div class="size- px-2 py-1 bg-blue-900/5 rounded-md flex justify-start items-start">
                <div class="justify-start text-blue-900 text-xs font-semibold font-['Plus_Jakarta_Sans']">Karakter</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-900 text-lg font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Pramuka (Scout Wikrama)</div>
          </div>
          <div class="self-stretch inline-flex justify-start items-center gap-1.5">
            <div class="size-4 relative overflow-hidden">
              <div class="w-3.5 h-3 left-[1.33px] top-[2px] absolute outline outline-2 outline-offset-[-1px] outline-slate-600"></div>
            </div>
            <div class="flex-1 justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans']">210 Siswa Aktif</div>
          </div>
          <div class="self-stretch px-4 py-2.5 bg-yellow-400 rounded-lg inline-flex justify-center items-center">
            <div class="justify-start text-slate-900 text-sm font-semibold font-['Plus_Jakarta_Sans']">Daftar Sekarang</div>
          </div>
        </div>
      </div>
      <div class="self-stretch bg-white rounded-xl shadow-[0px_4px_12px_0px_rgba(15,23,42,0.05)] outline outline-1 outline-offset-[-1px] outline-slate-200 inline-flex flex-col justify-start items-start overflow-hidden">
        <img class="self-stretch h-44" src="https://placehold.co/411x180" />
        <div class="self-stretch p-5 flex flex-col justify-start items-start gap-4">
          <div class="self-stretch flex flex-col justify-start items-start gap-2">
            <div class="size- inline-flex justify-start items-start gap-2">
              <div class="size- px-2 py-1 bg-blue-900/5 rounded-md flex justify-start items-start">
                <div class="justify-start text-blue-900 text-xs font-semibold font-['Plus_Jakarta_Sans']">Teknologi</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-900 text-lg font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Cyber Security & Networking</div>
          </div>
          <div class="self-stretch inline-flex justify-start items-center gap-1.5">
            <div class="size-4 relative overflow-hidden">
              <div class="w-3.5 h-3 left-[1.33px] top-[2px] absolute outline outline-2 outline-offset-[-1px] outline-slate-600"></div>
            </div>
            <div class="flex-1 justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans']">78 Siswa Aktif</div>
          </div>
          <div class="self-stretch px-4 py-2.5 bg-yellow-400 rounded-lg inline-flex justify-center items-center">
            <div class="justify-start text-slate-900 text-sm font-semibold font-['Plus_Jakarta_Sans']">Daftar Sekarang</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="self-stretch px-20 py-14 bg-white border-t border-b border-slate-200 inline-flex justify-start items-start gap-10">
    <div class="flex-1 inline-flex flex-col justify-start items-start gap-6">
      <div class="size- flex flex-col justify-start items-start gap-1.5">
        <div class="justify-start text-blue-900 text-xs font-bold font-['Plus_Jakarta_Sans'] uppercase">Kabar Kebanggaan</div>
        <div class="justify-start text-slate-900 text-2xl font-extrabold font-['Plus_Jakarta_Sans']">Prestasi Terbaru Siswa</div>
      </div>
      <div class="self-stretch flex flex-col justify-start items-start gap-4">
        <div class="self-stretch p-4 bg-slate-50 rounded-xl inline-flex justify-start items-center gap-4">
          <div class="size-11 bg-yellow-400 rounded-3xl flex justify-center items-center">
            <div class="size-5 relative overflow-hidden">
              <div class="size-5 left-[1.83px] top-[1.83px] absolute outline outline-2 outline-offset-[-1px] outline-slate-900"></div>
            </div>
          </div>
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-1">
            <div class="self-stretch inline-flex justify-between items-center">
              <div class="flex-1 justify-start text-slate-900 text-base font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Juara 1 Lomba Web Design LKS Nasional 2024</div>
              <div class="size- px-2 py-0.5 bg-blue-900 rounded-sm flex justify-start items-start">
                <div class="justify-start text-white text-[10px] font-semibold font-['Plus_Jakarta_Sans']">Nasional</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans'] line-clamp-2">Diraih oleh Rayhan Fadillah dari IT Club Wikrama.</div>
            <div class="self-stretch justify-start text-slate-400 text-xs font-normal font-['Plus_Jakarta_Sans']">15 Okt 2024</div>
          </div>
        </div>
        <div class="self-stretch p-4 bg-slate-50 rounded-xl inline-flex justify-start items-center gap-4">
          <div class="size-11 bg-yellow-400 rounded-3xl flex justify-center items-center">
            <div class="size-5 relative overflow-hidden">
              <div class="size-5 left-[1.83px] top-[1.83px] absolute outline outline-2 outline-offset-[-1px] outline-slate-900"></div>
            </div>
          </div>
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-1">
            <div class="self-stretch inline-flex justify-between items-center">
              <div class="flex-1 justify-start text-slate-900 text-base font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Medali Emas Turnamen Basket Bogor Cup 2024</div>
              <div class="size- px-2 py-0.5 bg-blue-900 rounded-sm flex justify-start items-start">
                <div class="justify-start text-white text-[10px] font-semibold font-['Plus_Jakarta_Sans']">Regional</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans'] line-clamp-2">Wikrama Ballers berhasil mengalahkan SMAN 1 Bogor di final.</div>
            <div class="self-stretch justify-start text-slate-400 text-xs font-normal font-['Plus_Jakarta_Sans']">12 Okt 2024</div>
          </div>
        </div>
        <div class="self-stretch p-4 bg-slate-50 rounded-xl inline-flex justify-start items-center gap-4">
          <div class="size-11 bg-yellow-400 rounded-3xl flex justify-center items-center">
            <div class="size-5 relative overflow-hidden">
              <div class="size-5 left-[1.83px] top-[1.83px] absolute outline outline-2 outline-offset-[-1px] outline-slate-900"></div>
            </div>
          </div>
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-1">
            <div class="self-stretch inline-flex justify-between items-center">
              <div class="flex-1 justify-start text-slate-900 text-base font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Juara Harapan 1 Olimpiade Bahasa Inggris Nasional</div>
              <div class="size- px-2 py-0.5 bg-blue-900 rounded-sm flex justify-start items-start">
                <div class="justify-start text-white text-[10px] font-semibold font-['Plus_Jakarta_Sans']">Nasional</div>
              </div>
            </div>
            <div class="self-stretch justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans'] line-clamp-2">Diraih oleh English Club perwakilan kelas XI RPL.</div>
            <div class="self-stretch justify-start text-slate-400 text-xs font-normal font-['Plus_Jakarta_Sans']">05 Okt 2024</div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex-1 inline-flex flex-col justify-start items-start gap-6">
      <div class="size- flex flex-col justify-start items-start gap-1.5">
        <div class="justify-start text-blue-900 text-xs font-bold font-['Plus_Jakarta_Sans'] uppercase">Informasi Terkini</div>
        <div class="justify-start text-slate-900 text-2xl font-extrabold font-['Plus_Jakarta_Sans']">Berita & Kegiatan Ekskul</div>
      </div>
      <div class="self-stretch flex flex-col justify-start items-start gap-4">
        <div class="self-stretch p-4 bg-slate-50 rounded-xl inline-flex justify-start items-center gap-4">
          <img class="size-24 rounded-lg" src="https://placehold.co/90x90" />
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-1">
            <div class="self-stretch justify-start text-slate-900 text-base font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Penerimaan Anggota Baru Ekskul Q3 Dimulai</div>
            <div class="self-stretch justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans'] line-clamp-2">Persiapkan NIS dan data diri Anda untuk pendaftaran online serentak.</div>
            <div class="self-stretch justify-start text-slate-400 text-xs font-normal font-['Plus_Jakarta_Sans']">10 Okt 2024</div>
          </div>
        </div>
        <div class="self-stretch p-4 bg-slate-50 rounded-xl inline-flex justify-start items-center gap-4">
          <img class="size-24 rounded-lg" src="https://placehold.co/90x90" />
          <div class="flex-1 inline-flex flex-col justify-start items-start gap-1">
            <div class="self-stretch justify-start text-slate-900 text-base font-bold font-['Plus_Jakarta_Sans'] line-clamp-1">Latihan Gabungan Pramuka dan PMR Sabtu Ini</div>
            <div class="self-stretch justify-start text-slate-600 text-xs font-normal font-['Plus_Jakarta_Sans'] line-clamp-2">Diikuti oleh seluruh siswa tingkat 10 dalam rangka melatih kemandirian.</div>
            <div class="self-stretch justify-start text-slate-400 text-xs font-normal font-['Plus_Jakarta_Sans']">08 Okt 2024</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection
