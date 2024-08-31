@extends('layouts.MainAdmin')

@section('content')
 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            
            <!-- Anggota Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Anggota</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahAnggota }}</h6> 
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Kegiatan Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                
                <div class="card-body">
                  <h5 class="card-title">Kegiatan</h5>
                  
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-event"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahKegiatan }}</h6>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            
            <!-- Periode Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Periode</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-event"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $tahunPeriode }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Reports -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Laporan Kegiatan</h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      const kegiatanData = @json($chartData['kegiatan']);

                      const monthNames = [
                        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
                      ];

                      // Menyiapkan data untuk grafik
                      const kegiatanSeries = monthNames.map((_, index) => kegiatanData[index + 1] || 0);

                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Kegiatan',
                          data: kegiatanSeries
                        }],
                        chart: {
                          height: 350,
                          type: 'line',
                          toolbar: {
                            show: false
                          },
                        },
                        xaxis: {
                          categories: monthNames
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#FF5733'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        tooltip: {
                          x: {
                            format: 'MM'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->
                </div>
              </div>
            </div>

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Kalendar Kegiatan</h5>

                  <div class="d-flex justify-content-between mb-3">
                    <!-- Tombol navigasi bulan sebelumnya -->
                    <a href="{{ route('dashboard', ['month' => $currentMonth - 1, 'year' => $currentYear]) }}" class="btn btn-primary">&lt;</a>

                    <!-- Tampilkan bulan dan tahun saat ini -->
                    <h4>{{ \Carbon\Carbon::create($currentYear, $currentMonth)->translatedFormat('F Y') }}</h4>

                    <!-- Tombol navigasi bulan berikutnya -->
                    <a href="{{ route('dashboard', ['month' => $currentMonth + 1, 'year' => $currentYear]) }}" class="btn btn-primary">&gt;</a>
                  </div>

                  <table class="table table-bordered calendar-table">
                    <thead>
                      <tr>
                        <th>Minggu</th>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                        <th>Sabtu</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $daysInMonth = \Carbon\Carbon::create($currentYear, $currentMonth)->daysInMonth;
                        $firstDay = \Carbon\Carbon::create($currentYear, $currentMonth, 1)->dayOfWeek;
                        $currentDate = 1;
                      @endphp

                      @for ($i = 0; $i < 6; $i++) 
                        <tr>
                          @for ($j = 0; $j < 7; $j++) 
                            @if ($i === 0 && $j < $firstDay)
                              <td></td> 
                            @elseif ($currentDate > $daysInMonth)
                              <td></td> 
                            @else
                              <td>
                                <strong>{{ $currentDate }}</strong>
                                @foreach($kegiatanKalender as $kegiatan)
                                  @if (\Carbon\Carbon::parse($kegiatan->tanggal)->day == $currentDate)
                                    <div>{{ $kegiatan->nama_kegiatan }}</div>
                                  @endif
                                @endforeach
                                @php $currentDate++; @endphp
                              </td>
                            @endif
                          @endfor
                        </tr>
                      @endfor
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Right side columns -->
        <div class="col-lg-4">
          
          <!-- Kegiatan Mendatang -->
          <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kegiatan Mendatang</h5>

                <div class="activity">
                    @foreach($kegiatanMendatang as $kegiatan)
                        @php
                            $interval = \Carbon\Carbon::now()->diff($kegiatan->tanggal);
                            $formattedInterval = '';

                            if ($interval->y > 0) {
                                $formattedInterval = $interval->y . ' tahun lagi';
                            } elseif ($interval->m > 0) {
                                $formattedInterval = $interval->m . ' bulan lagi';
                            } elseif ($interval->d > 0) {
                                $formattedInterval = $interval->d . ' hari lagi';
                            } elseif ($interval->h > 0) {
                                $formattedInterval = $interval->h . ' jam lagi';
                            } elseif ($interval->i > 0) {
                                $formattedInterval = $interval->i . ' menit lagi';
                            } else {
                                $formattedInterval = 'Sekarang';
                            }
                        @endphp

                        <div class="activity-item d-flex">
                            <div class="activite-label">{{ $formattedInterval }}</div>
                            <i class='bi bi-calendar-event-fill activity-badge text-primary align-self-start'></i>
                            <div class="activity-content">
                                {{ $kegiatan->nama_kegiatan }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
          </div>

          <!-- Berita Kegiatan -->
          <div class="card">
            <div class="card-body pb-0">
                <h5 class="card-title">Berita Kegiatan</h5>
                <div class="news-container" style="max-height: 400px; overflow-y: auto;">
                  <div class="news">
                      @foreach($beritaKegiatan as $kegiatan)
                          <div class="post-item d-flex mb-3">
                              <img src="{{ asset('storage/' . ($kegiatan->foto ?? 'default.jpg')) }}" alt="{{ $kegiatan->nama_kegiatan }}" class="me-3" style="width: 80px; height: 80px; object-fit: contain; border: 1px solid #ddd;">
                              <div>
                                  <h4><a href="#">{{ $kegiatan->nama_kegiatan }}</a></h4>
                                  <p>{{ Str::limit($kegiatan->deskripsi, 100) }}...</p>
                              </div>
                          </div>
                      @endforeach
                  </div>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    {{ $beritaKegiatan->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
                </div>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>
@endsection
