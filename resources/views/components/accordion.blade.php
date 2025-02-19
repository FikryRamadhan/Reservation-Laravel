<div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                    aria-controls="flush-collapseOne">
                    Fasilitas Hotel
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse"
                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Nikmati kolam renang, gym modern, spa, dan restoran dengan
                    hidangan internasional terbaik.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                    aria-controls="flush-collapseTwo">
                    Kebijakan Hotel
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Check-in mulai pukul 14.00, check-out pukul 12.00. Anak di bawah
                    12 tahun gratis jika menggunakan tempat tidur yang tersedia.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                    aria-controls="flush-collapseThree">
                    Ulasan Pengunjung
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">"Layanan luar biasa dan lokasi strategis!" – Nur A.</div>
                <div class="accordion-body">"Fasilitas terbaik, pasti akan kembali." – Budi S.</div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion accordion-flush" id="FAQAccordion">
        @foreach ($accordionItems as $index => $item)
            <div class="accordion-item">
                <h2 class="accordion-header" id="{{'service'.$index}}">
                    <button 
                        class="accordion-button" 
                        type="button" 
                        data-bs-toggle="collapse"
                        data-bs-target="#{{'service'.$index}}" 
                        aria-expanded="false" 
                        aria-controls="{{'service'.$index}}"
                    >
                        {{ $item["title"] }}
                    </button>
                </h2>
                <div id="{{'service'.$index}}" class="accordion-collapse collapse"
                    aria-labelledby="{{'service'.$index}}" data-bs-parent="#FAQAccordion">
                    <div class="accordion-body">{{ $item["description"] }}</div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}