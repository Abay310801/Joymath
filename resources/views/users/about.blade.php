@extends('layouts.user')

@section('contents')
    <div class="container px-4 py-6 mx-auto">
        <div class="flex flex-col items-center justify-center mx-auto mb-24 space-y-4 text-center my-11">
            <h1 class="text-2xl font-bold sm:text-3xl md:text-4xl lg:text-5xl">
                JOYMATH COGNITIVE BEHAVIORAL
            </h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl">
                Inovasi pembelajaran matematika untuk menciptakan <br>
                lingkungan belajar yang nyaman
            </p>
        </div>

        <div class="flex justify-center h-[50vh] mx-auto">
            <img src="{{ asset('/assets/img/landing page.png') }}" alt="" class="w-auto">
        </div>
        <div class="max-w-xl mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <div class="p-4">
                <p class="mt-2 text-gray-700">
                Joymath Cognitive Behavioral merupakan metode pemebelajaran yang menggabungkan teknik terapi kognitif 
                perilaku dengan tujuan restrukturisasi kognitif dan teknik relaksasi untuk membantu siswa mengendalikan 
                kecemasan dalam belajar matematika.inovasi penting yang mengintegrasikan pembelajaran matematika dengan 
                dukungan kesehatan mental, bertujuan untuk menciptakan lingkungan belajar yang lebih positif, nyaman, dan 
                bebas kecemasan. Metode ini diharapkan dapat meningkatkan kualitas pendidikan, kesejahteraan mental siswa, 
                dan relevansi proses pembelajaran dengan kebutuhan generasi alpha yang akrab dengan teknologi. Inovasi ini 
                juga diharapkan memberikan manfaat signifikan bagi perguruan tinggi, mitra, siswa, dan sekolah, menciptakan 
                solusi win-win bagi semua pihak yang terlibat.
                </p>
                <br>
                <h1>Metode ini menawarkan beberapa keunggulan:</h1>
                <ol>
                <li>1. Pendekatan Berbasis Psikologi</li>
                <li>2. Inklusif</li>
                <li>3. Konten Pembelajaran Beragam</li>
                <li>4. Video Edukatif Pendek</li>
                <li>5. Keseimbangan Matematika dan Kesehatan Mental</li>
                <li>6. Bahasa yang Menyenangkan</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
