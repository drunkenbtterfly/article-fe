<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta
			name="description"
			content="Youtz Media merupakan platform digital creative yang meliputi Artikel Berita, Influencer Marketing dan Jasa Kreatif. Dinaungi oleh PT. Kreasi Potensi Indonesia yang didirikan oleh Rinaldi Nur Ibrahim"
		/>
		<meta name="keywords" content="youtz media, youtz, digital creative, influencer, rinaldi nur ibrahim, rinaldi" />
		<meta name="author" content="Youtz Media" />
		<title>Youtz Creative - Incubator</title>
		<link rel="icon" href="{{ asset('assets/landing/index/youtzmedia.png') }}" type="image/png" />

		<!-- Font family -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

		<!-- Bootstrap -->
		<link href="{{ asset('assets/landing/index/style/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />

		<!-- Owl Carousel 2 -->
		<link rel="stylesheet" href="{{ asset('assets/landing/index/libraries/OwlCarousel2/dist/assets/owl.carousel.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/landing/index/libraries/OwlCarousel2/dist/assets/owl.theme.default.min.css') }}" />

		<!-- AOS -->
		<link href="{{ asset('assets/landing/index/style/aos.css') }}" rel="stylesheet" />

		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets/landing/index/style/utility.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/landing/index/style/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/landing/eo/style/event-organizer.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/landing/index/style/breakpoints.css') }}" />

		<!-- Swal -->
		<script src="{{ asset('assets/dashboard/plugins/sweetalert2/sweetalert2.js') }}"></script>
		<link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/sweetalert2/sweetalert2.css') }}">
	
		{{-- Google Adsense --}}
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9508501600510574" crossorigin="anonymous"></script>
	
		{{-- Google Site Verification --}}
		<meta name="google-site-verification" content="qjR-Eqivfnsqw4ygODaA0-y8gNmcQMwffCJm6W2tKqc" />
	</head>
	<body>
		<!-- Jumbotron -->
		<div class="jumbotron position-relative jumbotron-event-organizer" id="event-organizer" style="background-image: url('{{ asset('https://i.ibb.co/nMzx593/Screenshot-2024-05-11-105631.png') }}') !important">
			<!-- Navigation -->
			<header class="py-3 position-fixed start-0 end-0 top-0 z-3 bg-header-none" id="header">
				<nav class="navbar navbar-expand-lg container">
					<div class="container-fluid p-0">
						<a href="/" class="navbar-brand"><img src="{{ asset('assets/landing/index/youtzmedia.png') }}" alt="logo" height="48" /></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-button d-flex flex-column gap-1 py-2">
								<div></div>
								<div></div>
								<div></div>
							</span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
							<ul class="navbar-nav mt-3 mt-lg-0 gap-3">
								<li class="nav-item">
                                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('incubator') }}">Incubator</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://youtzmedia.id/support#faq">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://youtzmedia.id/support#contact">Kontak</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <div class="nav-link cursor-pointer" id="icon-search">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.1519 15.282L21.2 19.3291L19.8626 20.6666L15.8154 16.6184C14.3095 17.8256 12.4365 18.4822 10.5064 18.4795C5.81089 18.4795 2 14.6686 2 9.973C2 5.27744 5.81089 1.46655 10.5064 1.46655C15.202 1.46655 19.0129 5.27744 19.0129 9.973C19.0156 11.903 18.3591 13.7761 17.1519 15.282ZM15.2559 14.5807C16.4554 13.3471 17.1253 11.6936 17.1226 9.973C17.1226 6.31712 14.1614 3.35687 10.5064 3.35687C6.85057 3.35687 3.89032 6.31712 3.89032 9.973C3.89032 13.6279 6.85057 16.5891 10.5064 16.5891C12.227 16.5918 13.8806 15.922 15.1141 14.7224L15.2559 14.5807Z"
                                                fill="#FFFFFF"
                                            />
                                        </svg>
                                    </div>
                                </li> --}}
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<!-- End navigation -->

			<!-- Content jumbotron -->
			<div class="container content-jumbotron content-jumbotron2 content-jumbotron--eo h-100 position-relative z-1 flex-column justify-content-center gap-0">
				<h1 class="lh-base fw-semibold text-white text-center" data-aos="fade-down">PENGUMUMAN TAHAP FINAL - YOUTZ CREATIVE INCUBATOR</h1>
				<p class="text-white description-jumbotron text-center max-lg lh-base mt-3" data-aos="fade-right">
					Hai, Minyoutz di sini! Melalui laman ini kamu bisa cek apakah kamu lolos tahap final atau tidak.
				</p>
                <p class="text-white description-jumbotron text-center max-lg lh-base mt-3" data-aos="fade-right">
					Sebelumnya, Youtz Media mengucapkan terima kasih kepada semua pendaftar, apapun hasilnya jangan lupa ucapkan terima kasih kepada diri sendiri karena sudah mengupayakan untuk mencoba.
				</p>
                <p class="text-white description-jumbotron text-center max-lg lh-base mt-3" data-aos="fade-right">
					Sampai bertemu di program Youtz Media lainnya!
				</p>
				<div class="d-flex flex-wrap gap-3 justify-content-center" data-aos="fade-up">
					<a href="#check" onclick="enable_check()" class="mt-3 text-decoration-none btn-find-influencer btn-portofolio px-4 rounded-pill d-block fw-semibold px-4 py-2">Lihat Status Anda</a>
				</div>
			</div>
			<!-- End content jumbotron -->
		</div>
		<!-- End jumbotron -->
        
        <!-- Kontak -->
		<section class="container section-container scroll-mt-250" id="check">
			<h2 class="title-container fs-3" data-aos="fade-down" data-aos-delay="700">Pengumuman tahap final Youtz Creative Incubator</h2>
			<p class="description-tertiary" data-aos="fade-down">Ketik nama dan alamat email yang kamu gunakan saat melakukan pendaftaran. Pastikan benar dan sesuai!</p>
			<div class="mt-4 d-flex flex-column gap-5 flex-lg-row">
				<div class="w-100" data-aos="fade-left" data-aos-delay="400">
					{{-- <p class="mb-0 fs-4 fw-semibold title-question">Ada pertanyaan?</p>
					<p class="description-tertiary mt-2">Isi form dibawah ini, untuk mengajukan pertanyaan baru.</p> --}}
					<form id="pesanform" action="javascript:check_daftar()" enctype="multipart/form-data" method="POST" class="d-flex flex-column gap-4">
						<div class="d-flex flex-column gap-2">
							<label for="nama" class="w-100 d-block text-sm description-secondary">Nama</label>
							<input type="text" placeholder="John Doe" class="input-question pb-2" id="nama" name="nama" required />
						</div>
						<div class="d-flex flex-column gap-2">
							<label for="email" class="w-100 d-block text-sm description-secondary">Email</label>
							<input type="email" placeholder="johndoe@gmail.com" class="input-question pb-2" id="email" name="email" required />
						</div>
						{{-- <div class="d-flex flex-column gap-2">
							<label for="pesan" class="w-100 d-block text-sm description-secondary">Pesan</label>
							<textarea name="pesan" id="pesan" rows="3" class="input-question pb-2 w-100" placeholder="Halo kak..." required></textarea>
						</div> --}}
						<button type="submit" class="text-white border-0 rounded-2 fw-medium btn-send-question px-4 py-2 text-sm">Kirim</button>
					</form>
				</div>
			</div>
		</section>
		<!-- End kontak -->

		<!-- FAQ -->
		<section class="section-container py-5 bg-gray-100 scroll-mt-120" id="faq" data-aos="zoom-in-up" style="display: none;">
			<div class="container" id="container_hasil">
				<h2 id="h2_hasil" class="title-container fs-3 mb-5 text-center">Hasil Pendaftaran</h2>
				<div class="accordion-body" id="hasil">

                    <br>
                    <br>

                    <span style="color: white !important;" id="span_nama"> 
                    </span>
                    
                    <br>
                    <br>

                    <span style="color: white !important;" id="span_instansi"> 
                    </span>
                    
                    <br>
                    <br>

                    <span style="color: white !important;" id="span_email"> 
                    </span>

                    <br>
                    <br>

                </div>

				<br>
                <br>

                <h2 id="message" class="title-container fs-3 mb-5 text-center">Selamat kamu lolos tahap final!</h2>
                <div class="accordion-body lolos">
                    <br>
                    <br>

                    <span style="color: white !important; text-align: center; font-weight: bold" id="span_nama_divisi"> 
                    </span>

                    <br>
                    <br>

                    <span style="color: white !important;" id="span_link_divisi"> 
                        Silakan bergabung melalui link berikut : <a id="nlink" href="">Klik di sini!</a>
                    </span>

                </div>
				<p class="description-tertiary text-center mt-5">Ada pertanyaan? <a href="https://wa.me/6282183733673" class="text-decoration-underline">Hubungi Kami</a></p>
			</div>
		</section>
		<!-- End FAQ -->

		<!-- Footer -->
		<footer class="py-5">
			<div class="container">
				<div class="grid">
					<div>
						<img src="{{ asset('assets/landing/index/youtzmedia.png') }}" alt="logo" height="72" />
						<ul class="list-unstyled d-flex align-items-center gap-4 mb-0 mt-4">
							<li>
								<a href="https://www.instagram.com/youtzmedia/" title="Instagram">
									<svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75ZM12 4C9.526 4 9.122 4.007 7.971 4.058C7.187 4.095 6.661 4.2 6.173 4.39C5.739 4.558 5.426 4.759 5.093 5.093C4.78001 5.3954 4.53935 5.76458 4.389 6.173C4.199 6.663 4.094 7.188 4.058 7.971C4.006 9.075 4 9.461 4 12C4 14.474 4.007 14.878 4.058 16.029C4.095 16.812 4.2 17.339 4.389 17.826C4.559 18.261 4.759 18.574 5.091 18.906C5.428 19.242 5.741 19.443 6.171 19.609C6.665 19.8 7.191 19.906 7.971 19.942C9.075 19.994 9.461 20 12 20C14.474 20 14.878 19.993 16.029 19.942C16.811 19.905 17.338 19.8 17.826 19.611C18.259 19.442 18.574 19.241 18.906 18.909C19.243 18.572 19.444 18.259 19.61 17.829C19.8 17.336 19.906 16.809 19.942 16.029C19.994 14.925 20 14.539 20 12C20 9.526 19.993 9.122 19.942 7.971C19.905 7.189 19.8 6.661 19.61 6.173C19.4593 5.765 19.2191 5.39596 18.907 5.093C18.6047 4.77985 18.2355 4.53917 17.827 4.389C17.337 4.199 16.811 4.094 16.029 4.058C14.925 4.006 14.539 4 12 4ZM12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2Z"
											fill="#64748B"
										/>
									</svg>
								</a>
							</li>
							<li>
								<a href="https://youtube.com/@youtzmedia" title="Youtube">
									<svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M19.606 6.995C19.53 6.697 19.314 6.472 19.067 6.403C18.63 6.28 16.5 6 12 6C7.5 6 5.372 6.28 4.931 6.403C4.687 6.471 4.471 6.696 4.394 6.995C4.285 7.419 4 9.196 4 12C4 14.804 4.285 16.58 4.394 17.006C4.47 17.303 4.686 17.528 4.932 17.596C5.372 17.72 7.5 18 12 18C16.5 18 18.629 17.72 19.069 17.597C19.313 17.529 19.529 17.304 19.606 17.005C19.715 16.581 20 14.8 20 12C20 9.2 19.715 7.42 19.606 6.995ZM21.543 6.498C22 8.28 22 12 22 12C22 12 22 15.72 21.543 17.502C21.289 18.487 20.546 19.262 19.605 19.524C17.896 20 12 20 12 20C12 20 6.107 20 4.395 19.524C3.45 19.258 2.708 18.484 2.457 17.502C2 15.72 2 12 2 12C2 12 2 8.28 2.457 6.498C2.711 5.513 3.454 4.738 4.395 4.476C6.107 4 12 4 12 4C12 4 17.896 4 19.605 4.476C20.55 4.742 21.292 5.516 21.543 6.498ZM10 15.5V8.5L16 12L10 15.5Z"
											fill="#64748B"
										/>
									</svg>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/youtz-media/" title="LinkedIn">
									<svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M4 3H20C20.2652 3 20.5196 3.10536 20.7071 3.29289C20.8946 3.48043 21 3.73478 21 4V20C21 20.2652 20.8946 20.5196 20.7071 20.7071C20.5196 20.8946 20.2652 21 20 21H4C3.73478 21 3.48043 20.8946 3.29289 20.7071C3.10536 20.5196 3 20.2652 3 20V4C3 3.73478 3.10536 3.48043 3.29289 3.29289C3.48043 3.10536 3.73478 3 4 3ZM5 5V19H19V5H5ZM7.5 9C7.10218 9 6.72064 8.84196 6.43934 8.56066C6.15804 8.27936 6 7.89782 6 7.5C6 7.10218 6.15804 6.72064 6.43934 6.43934C6.72064 6.15804 7.10218 6 7.5 6C7.89782 6 8.27936 6.15804 8.56066 6.43934C8.84196 6.72064 9 7.10218 9 7.5C9 7.89782 8.84196 8.27936 8.56066 8.56066C8.27936 8.84196 7.89782 9 7.5 9ZM6.5 10H8.5V17.5H6.5V10ZM12 10.43C12.584 9.865 13.266 9.5 14 9.5C16.071 9.5 17.5 11.179 17.5 13.25V17.5H15.5V13.25C15.5 12.7859 15.3156 12.3408 14.9874 12.0126C14.6592 11.6844 14.2141 11.5 13.75 11.5C13.2859 11.5 12.8408 11.6844 12.5126 12.0126C12.1844 12.3408 12 12.7859 12 13.25V17.5H10V10H12V10.43Z"
											fill="#64748B"
										/>
									</svg>
								</a>
							</li>
							<li>
								<a href="https://tiktok.com/@youtzmedia.id" title="Tiktok">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_22_55)">
											<path
												d="M14.8624 0.474047C15.0359 1.71617 15.5147 2.69427 16.292 3.37234C17.0484 4.0324 18.1101 4.42244 19.4634 4.49445C19.7687 4.51245 19.9977 4.72847 19.9977 4.9865V8.0228C19.9977 8.29283 19.7479 8.51485 19.4356 8.51485C18.4918 8.59286 17.6105 8.49685 16.7292 8.25683C16.1324 8.09481 15.5355 7.86679 14.9179 7.58476V12.4092C14.9179 14.6955 14.0435 16.5257 12.7181 17.8098C11.7465 18.7519 10.539 19.4059 9.24131 19.742C7.9436 20.078 6.56261 20.102 5.25796 19.772C3.65491 19.3699 2.16983 18.4458 1.115 16.9517C0.44186 15.9976 0.0532413 14.8455 0.00466395 13.6754C-0.0369738 12.5953 0.198973 11.4911 0.761083 10.495C1.33013 9.49295 2.2184 8.59286 3.46754 7.93279C4.68891 7.28473 6.25727 6.87069 8.20036 6.81068C8.51264 6.79868 8.77635 7.0147 8.79023 7.28473V10.501C8.79023 10.7591 8.56122 10.9691 8.26976 10.9931C7.99911 11.0351 7.72153 11.0831 7.44394 11.1371C7.1733 11.1911 6.90959 11.2571 6.65282 11.3351C5.92416 11.5452 5.36205 11.8452 5.02895 12.2472C4.70279 12.6373 4.57094 13.1533 4.68197 13.8254C4.8277 14.7315 5.61882 15.4155 6.55567 15.6916C6.94429 15.8056 7.35373 15.8536 7.74929 15.8176C8.13791 15.7816 8.51264 15.6676 8.84575 15.4635C9.69238 14.9415 10.2684 13.8134 10.0949 11.8872V0.492049C10.0949 0.222022 10.3516 0 10.6639 0H14.2934C14.5987 0 14.8416 0.20402 14.8624 0.462046V0.474047ZM15.48 4.06241C14.6126 3.30633 14.0505 2.27423 13.8006 1.0021H11.233V11.8572C11.4342 14.1674 10.6431 15.5716 9.50501 16.2796C9.00536 16.5917 8.44325 16.7657 7.86726 16.8197C7.30515 16.8737 6.72222 16.8077 6.18093 16.6457C4.86934 16.2556 3.76594 15.2835 3.55081 13.9814C3.39814 13.0393 3.60633 12.2832 4.10598 11.6892C4.59176 11.1071 5.34818 10.6991 6.2989 10.423C6.58343 10.339 6.88183 10.267 7.18718 10.201C7.34679 10.165 7.49946 10.135 7.65907 10.111V7.84278C6.20175 7.95079 5.00813 8.29283 4.07128 8.79088C3.0234 9.34893 2.27392 10.099 1.79509 10.9451C1.31625 11.7972 1.10806 12.7393 1.1497 13.6574C1.19134 14.6595 1.5175 15.6436 2.09349 16.4536C2.9887 17.7198 4.23784 18.5058 5.58412 18.8359C6.67364 19.1059 7.83256 19.0879 8.92902 18.8059C10.0255 18.5179 11.0525 17.9658 11.8784 17.1617C13.0303 16.0456 13.7868 14.4434 13.7868 12.4152V6.74467C13.7868 6.66067 13.8145 6.57066 13.87 6.49265C14.0296 6.25863 14.3836 6.18062 14.6542 6.32463C15.5147 6.76868 16.3058 7.11071 17.0831 7.32073C17.673 7.48275 18.2628 7.56076 18.8666 7.56076V5.44254C17.4717 5.28653 16.3475 4.81848 15.4939 4.07441L15.48 4.06241Z"
												fill="#64748B"
											/>
										</g>
										<defs>
											<clipPath id="clip0_22_55">
												<rect width="20" height="20" fill="white" />
											</clipPath>
										</defs>
									</svg>
								</a>
							</li>
						</ul>
					</div>
					{{-- <div>
						<span class="text-uppercase fw-medium">Company</span>
						<ul class="list-unstyled">
							<li class="mt-2">
								<a href="{{ route('influencer') }}" class="description-tertiary text-decoration-none d-block text-sm">Influencer</a>
							</li>
							<li class="mt-2">
								<a href="{{ route('website_landing') }}" class="description-tertiary text-decoration-none d-block text-sm">Jasa website</a>
							</li>
							<li class="mt-2">
								<a href="{{ route('handling_sosmed') }}" class="description-tertiary text-decoration-none d-block text-sm">Handling Social Media</a>
							</li>
							<li class="mt-2">
								<a href="{{ route('production_house') }}" class="description-tertiary text-decoration-none d-block text-sm">Production house</a>
							</li>
							<li class="mt-2">
								<a href="{{ route('event_organizer') }}" class="description-tertiary text-decoration-none d-block text-sm">Event organizer</a>
							</li>
						</ul>
					</div> --}}
					<div>
						<span class="text-uppercase fw-medium">Support</span>
						<ul class="list-unstyled">
							<li class="mt-2">
								<a href="https://youtzmedia.id/support#faq" class="description-tertiary text-decoration-none d-block text-sm">FAQ</a>
							</li>
							<li class="mt-2">
								<a href="https://youtzmedia.id/support#contact" class="description-tertiary text-decoration-none d-block text-sm">Kontak</a>
							</li>
						</ul>
					</div>
					<div>
						<span class="text-uppercase fw-medium">Location</span>
						<ul class="list-unstyled">
							<li class="mt-2">
								<span class="description-tertiary text-sm">Jl. Lengkong Gudang Timur Raya No.79 A, Lengkong Gudang Timur, Kec. Serpong, Kota Tangerang Selatan, Banten 15310</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="copyright pt-4 mt-5">
					<span class="text-sm description-tertiary">Hak Cipta &copy; 2023 Youtz Media</span>
				</div>
			</div>
		</footer>
		<!-- End footer -->

		<!-- Popup buyer data -->
		<div class="position-fixed z-3 d-none align-items-center justify-content-center" id="popup-buy-package">
			<form class="bg-white d-flex flex-column gap-4 position-relative" method="POST" id="form-buy-package" data-kerjasama="true">
				<div class="position-absolute" id="close-popup-buy-package">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
						<path
							d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z"
							fill="rgba(255,22,22,1)"
						></path>
					</svg>
				</div>
				<div class="d-flex flex-column gap-3 align-items-center">
					<img src="{{ asset('assets/landing/index/youtzmedia.png') }}" alt="youtzmedia" height="64" />
					<p class="text-sm description-tertiary mb-0">Silahkan isi terlebih dahulu form dibawah ini.</p>
				</div>
				<div class="text-sm d-flex flex-column gap-2">
					<label for="nama" class="d-block">Nama Lengkap <sup class="text-danger">*</sup></label>
					<input type="text" id="nama" name="nama" placeholder="John Doe" class="px-3 py-2 input-buy-package rounded-2" required />
				</div>
				<div class="text-sm d-flex flex-column gap-2">
					<button type="submit" name="send-buy-package" class="btn btn-primary">Kirim</button>
				</div>
			</form>
		</div>
		<!-- End Popup buyer data -->
	</body>
	<!-- Bootstrap -->
	<script src="{{ asset('assets/landing/index/libraries/popper/popper.min.js') }}" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/landing/index/libraries/bootstrap/bootstrap.min.js') }}" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

	<!-- Owl Carousel 2 -->
	<script src="{{ asset('assets/landing/index/libraries/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/landing/index/libraries/OwlCarousel2/dist/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/landing/index/script/owl-carousel.js') }}"></script>

    {{-- BlockUI --}}
    <script src="{{ asset('assets/landing/index/script/jquery.blockUI.js') }}"></script>

	<!-- AOS -->
	<script src="{{ asset('assets/landing/index/libraries/aos/aos_func.js') }}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('assets/landing/index/script/aos.js') }}"></script>
	{{-- <script src="script/app.js"></script> --}}
	@include('landing.javascript')
	<script>
		window.addEventListener('load', function () {
			const divCookiesElement = document.createElement('div');
			divCookiesElement.classList.add('cookies', 'py-4', 'position-fixed', 'bottom-0', 'start-0', 'end-0');

			if (localStorage.getItem('cookies') == null && localStorage.getItem('cookies') != 'true') {
				divCookiesElement.innerHTML = `<div class="container d-flex align-items-center flex-wrap gap-3 justify-content-between">
				<p class="text-white text-sm max-lg mb-0">
					We use cookies to enhance your experience on our website. This website uses cookies that provide targeted advertising and which track your use of this website. By clicking ‘continue’ or by continuing to use our website, you are
					agreeing to our use of cookies.
				</p>
				<button type="button" class="text-sm btn text-white btn-cookies">Lanjutkan</button>
			</div>`;

				document.body.append(divCookiesElement);

				const btnCookies = document.querySelector('.btn-cookies');
				btnCookies.addEventListener('click', function () {
					divCookiesElement.classList.add('hidden');
					localStorage.setItem('cookies', 'true');
				});
			}
		});
	</script>
    <script>
		function enable_check(){
			$('#check').show();
			$('#faq').hide();
		}
        function check_daftar(message = 'Mohon menunggu...'){
            $.blockUI({
                message: `<div class="blockui-message" style="z-index: 9999"><span class="spinner-border text-primary"></span> ${message} </div>`,
                css: {
                    border: 'none',
                    backgroundColor: 'rgba(47, 53, 59, 0)',
                    'z-index': 9999
                }
            });
            var nama = $('#nama').val();
            var email = $('#email').val();
			var targetElement = $('#container_hasil');
            $.ajax({
                url: '{{ route('check_daftar') }}',
                type: 'POST',
                data:{
                    nama: nama,
                    email: email
                },
                success:function(res){
                    $.unblockUI();
                    if(res.success === true){
                        Swal.fire(
                            'Berhasil!',
                            'Data ditemukan!',
                            'success'
                        );
                        // Isi HTMLnya
                        $('#span_nama').html('Nama Lengkap : ' + res.nama);
                        $('#span_instansi').html('Instansi : '+ res.instansi);
                        $('#span_email').html('Email : ' + maskEmail(res.email));
                        $('#span_nama_divisi').html('Divisi : ' + res.nama_divisi);
                        $('#nlink').attr('href', 'https://chat.whatsapp.com/CLPRtKEubmx85zT8nB8Qw8');
                        $('#faq').show();
                        $('#span_link_divisi').show();
                        $('#span_nama_divisi').show();
                        $('#span_instansi').show();
                        $('#message').html('Selamat kamu lolos tahap final!');
						$('#check').hide();
						$('html, body').animate({
							scrollTop: targetElement.offset().top
						}, 1000); // You can adjust the duration as needed
                    }else{
                        // Swal.fire(
                        //     'Gagal!',
                        //     'Data tidak ditemukan!',
                        //     'error'
                        // );
                        $('#span_nama').html('Nama Lengkap : ' + nama);
                        $('#span_email').html('Email : ' + maskEmail(email));
                        $('#span_nama_divisi').html('Jangan berkecil hati, dan tetap semangat ! Sampai jumpa pada event incubator berikutnya !');
                        $('#faq').show();
                        $('#span_link_divisi').hide();
                        $('#span_nama_divisi').show();
                        $('#span_instansi').hide();
                        $('#message').html('Anda belum lolos tahap final');
						$('#check').hide();
						$('html, body').animate({
							scrollTop: targetElement.offset().top
						}, 1000); // You can adjust the duration as needed
                    }
                },
                error:function(res){
                    $.unblockUI();
                    Swal.fire(
                        'Gagal!',
                        'Gagal mencari data!',
                        'error'
                    );
                    $('#faq').hide();
                    $('#span_link_divisi').hide();
                    $('#span_nama_divisi').hide();
                    $('#span_instansi').hide();
					$('#check').show();
                }
            });
        }

        function maskEmail(email) {
            var parts = email.split('@');
            var maskedUsername = maskCharacters(parts[0], 3, '*'); // You can change the number of characters to mask
            return maskedUsername + '@' + parts[1];
        }

        function maskCharacters(str, num, maskChar) {
            var maskedStr = '';
            for (var i = 0; i < str.length; i++) {
                if (i >= str.length - num) {
                    maskedStr += maskChar;
                } else {
                    maskedStr += str[i];
                }
            }
            return maskedStr;
        }
    </script>
</html>
