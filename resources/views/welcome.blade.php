<!doctype html>
<html>
@include('layouts.head')
<body class="bg-[#D3D3D3]/[.1]">
<div class="hidden lg:block whatsapp-icon">
    <a href="whatsapp://send?phone=994516819308@s.whatsapp.com">
        <img src="{{asset('assets/img/whatsapp.svg')}}" alt="">
    </a>
</div>
<header class="relative">
    <img class="main-img" src="{{asset('assets/img/01.jpg')}}" alt="">
    <div class="menu hidden top-0 lg:block absolute w-full">
        <div class="lg:px-28 lg:py-8 flex justify-between w-full">
            <img class="" src="{{asset('assets/img/logo.svg')}}" alt="" style="width: 100px">
            <ul class="font-bold text-sm text-[#013793] flex gap-x-16">
                <li>
                    <a href="#tours">{{__('ТУРЫ')}}</a>
                </li>
                <li>
                    <a href="#about-us">{{__('О НАС')}}</a>
                </li>
                <li>
                    <a href="#about-us">{{__('КОНТАКТЫ')}}</a>
                </li>
                <li>
                    <a href="#hotels">{{__('ОТЕЛИ')}}</a>
                </li>
                <li>
                    <a href="#transport">{{__('ТРАНСПОРТ')}}</a>
                </li>
                <li>
                    <div class="lang-list relative drop-shadow-md">
                        <a class="flex active-lang gap-x-2 items-center" href="">
                            <img src="{{asset('assets/img/lang/'.app()->getLocale().'.svg')}}" alt="" style="width: 35px">
                            <span class="uppercase">{{app()->getLocale()}}</span>
                        </a>
                        <div class="locales absolute hidden pt-2 drop-shadow-xl">
                            @foreach(\Illuminate\Support\Facades\Config::get('app.locales') as $locale)
                                @if($locale != app()->getLocale())
                                <a class="flex gap-x-2 items-center my-1" href="/lang/{{$locale}}">
                                    <img src="{{asset('assets/img/lang/'.$locale.'.svg')}}" alt="" style="width: 35px">
                                    <span class="uppercase">{{$locale}}</span>
                                </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <div class="mobile-header top-0 absolute flex justify-between w-full  p-8 lg:hidden">
        <img class="" src="{{asset('assets/img/mob-logo.svg')}}" alt="" style="width: 106px">
        <a class="flex menu-button" href="">
            <img class="" src="{{asset('assets/img/menu.svg')}}" alt="">
        </a>
        <div class="absolute hidden mobile-menu p-2 top-0 right-0 w-1/2 h-screen bg-regal-blue/[.9] z-10">
            <div class="close-button">
                <a class="close-button" href="">
                    <i class="fa-solid fa-xmark" style="color: #ffffff;"></i>
                </a>
            </div>
            <ul class="font-bold flex flex-col mt-4 mr-6 gap-y-4 mx-auto text-sm text-right text-white">
                <li>
                    <a href="#tours" onclick="clickMenu()">{{__('ТУРЫ')}}</a>
                </li>
                <li>
                    <a href="#about-us" onclick="clickMenu()">{{__('О НАС')}}</a>
                </li>
                <li>
                    <a href="#about-us" onclick="clickMenu()">{{__('КОНТАКТЫ')}}</a>
                </li>
                <li>
                    <a href="#hotels" onclick="clickMenu()">{{__('ОТЕЛИ')}}</a>
                </li>
                <li>
                    <a href="#transport" onclick="clickMenu()">{{__('ТРАНСПОРТ')}}</a>
                </li>
                <li>
                    <div class="lang-list relative drop-shadow-md flex justify-end">
                        <a class="flex active-lang gap-x-2 items-center" href="">
                            <img src="{{asset('assets/img/lang/'.app()->getLocale().'.svg')}}" alt="" style="width: 35px">
                            <span class="uppercase">{{app()->getLocale()}}</span>
                        </a>
                        <div class="locales absolute hidden pt-2 drop-shadow-xl">
                            @foreach(\Illuminate\Support\Facades\Config::get('app.locales') as $locale)
                                @if($locale != app()->getLocale())
                                    <a class="flex gap-x-2 items-center my-1" href="">
                                        <img src="{{asset('assets/img/lang/'.$locale.'.svg')}}" alt="" style="width: 35px">
                                        <span class="uppercase">{{$locale}}</span>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="absolute mb-12 px-8 w-full inset-x-0 bottom-0 flex flex-col items-center lg:mb-40">
        <a class="w-5/6 text-center lg:text-xl bg-[#FFD500] lg:w-max lg:tracking-wider p-2 rounded-full" href="" onclick="callToMe(event)">{{__('Оставьте контакты и мы с вами свяжемся')}}</a>
        <p class="text-xl lg:text-2xl w-max p-2 text-white font-bold">{{__('или')}}</p>
        <a class="w-4/5 text-center text-xl uppercase lg:w-max p-2 text-white font-bold bg-[#145BE7] rounded-full" href="" onclick="order(event)">{{__('ОФОРМИТЕ ЗАЯВКУ')}}</a>
    </div>
    <div class="absolute w-full top-[25%] text-center">
        <p class="text-xl  lg:text-2xl lg:tracking-widest font-bold uppercase text-[#0052E0]">{{__('В ЛЮБОЙ УГОЛОК')}}</p>
        <p class="text-3xl lg:text-5xl lg:tracking-widest font-bold uppercase text-[#013793]">{{__('АЗЕРБАЙДЖАНА')}}</p>
    </div>
</header>
<section id="tours" class="">
    <div class="separator h-4 bg-[#FFD500]"></div>
    <div class="bg-[#145BE7] px-8 lg:px-28 py-4">
        <p class="font-bold text-3xl text-center lg:text-left lg:text-5xl text-white">{{__('Горящие туры')}}</p>
        <a target="_blank" class="block text-white text-sm lg:text-left lg:text-xl mt-2 text-center underline underline-offset-4" href="{{asset('assets/menu.pdf')}} ">{{__('Для гостей из Израиля мы предлагаем кошерное меню! (цены начинаются от 30 $)')}}</a>
    </div>
    <div class="tour-list flex flex-col gap-y-8 my-8 px-8 lg:px-28">
        @foreach($data as $d)
        <div class="tour- bg-white overflow-hidden lg:flex rounded-t-xl lg:rounded-l-xl" style="box-shadow: 0px 14px 23px 19px rgba(0, 0, 0, 0.04);">
            <div class="lg:w-1/2">
                <img class="h-full" src="\storage\{{$d->main_image}}" alt="">
            </div>
            <div class="lg:w-1/2 p-4 relative">
                <p data-tour-id="{{$d->id}}" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="tour-click mb-4 font-bold text-3xl lg:text-5xl text-center lg:text-left text-[#00C8DA] cursor-pointer" type="button">{{$d->name}}</p>
                <div class="flex items-center">
                    <img src="{{asset('assets/img/travel.svg')}}" alt="" style="width: 31px;
                                                                                height: 30px">
                    <p class="font-medium text-[#575757]">{{__('Выезд из отеля')}}</p>
                </div>
                <div class="mb-4 flex items-center">
                    <img src="{{asset('assets/img/time.svg')}}" alt="">
                    <p class="font-medium text-[#575757]">{{__('Длительность (дней):')}} {{$d->duration}}</p>
                </div>
                <p class="whitespace-pre-line lg:text-xl text-[#575757]">{{\Illuminate\Support\Str::limit($d->text, 700)}}</p>
                <div class="mt-8 lg:mt-14 flex flex-col items-center lg:!items-start gap-y-2">
                    <a data-tour-id="{{$d->id}}" class="tour-click text-regal-blue underline" href="">{{__('Читать далее...')}}</a>
                    <div class="flex justify-center items-center gap-x-4 w-64 bg-regal-blue text-white rounded-full" style="background: #145BE7;
                                                                                                                            box-shadow: 0px 13px 9px -2px rgba(20, 91, 231, 0.29);">
                        <p class="inline-block">{{__('От')}}</p>
                        <span class="mrl-8 text-2xl font-medium"> {{$d->price}}$</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<section id="transport" class="">
    <div class="separator h-4 bg-[#FFD500]"></div>
    <div class="bg-regal-blue px-8 py-4 lg:px-28 text-white">
        <p class="text-3xl lg:text-5xl font-bold text-center lg:text-left ">{{__('Транспорт')}}</p>
        <p class="text-sm text-center lg:text-left lg:text-xl">{{__('Мы организуем ваш отдых на весь период вашего прибывания!')}}</p>
    </div>
    <div class=" px-8 py-4 lg:px-28">
        <p class="text-regal-blue font-bold text-3xl lg:text-5xl text-center">{{__('Забота, комфорт и безопасность')}}</p>
        <p class="text-gray-500 lg:text-xl text-center">{{__('Мы встретим Вас в любом месте Азербайджана и доставим вас до нужного места назначения.
            Мы специализируемся на трансферах из аэропорта Баку и в регионах Азербайджана.
            Наш бизнес ориентирован на высокий уровень обслуживания клиентов,
            наши стандарты сервиса основаны на большом опыте в перевозке людей.
            Все трансфер услуги включают встречу в аэропорту или отеле, водителя, который поможет
             Вам с багажом и ответит на местные вопросы.
             Наша компания предлагает следующие виды транспорта:')}}</p>
        <div class="transport-slider">
            @foreach($transports as $t)
                <div class="justify-end items-end {{$loop->even ? 'lg:!items-start': 'lg:!items-end justify-end'}}">
                    <img src="/storage/{{$t->image}}" alt="">
                    <p class="text-xs lg:text-sm mt-10 ml-4 justify-end items-end {{$loop->even ? 'lg:mt-8': 'lg:mb-8 lg:mr-8'}} px-1 py-0.5 rounded-lg bg-[#FFD500] w-max lg:tex-sm">{{$t->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="hotels">
    <div class="separator h-4 bg-[#FFD500]"></div>
    <div class="bg-regal-blue px-8 py-4 lg:px-28 text-white">
        <p class="text-3xl lg:text-5xl font-bold text-center lg:text-left ">{{__('ОТЕЛИ')}}</p>
        <p class="text-sm text-center lg:text-left lg:text-xl">{{__('Наши цены ниже чем на Booking')}}</p>
    </div>
    <div class=" px-8 py-4 lg:px-28">
        <div class="ext-gray-500 my-4 lg:text-xl text-center">
            <p class="text-gray-500 lg:text-xl text-center">{{__('Нашим клиентам предоставляются лучшие места в отелях
                с разными вариантами и типами размещения.
                Для вас все выгоды клиента крупного туроператора:
                 адекватные цены, заранее забронированные билеты и номера
                  в отелях, высокий уровень сервиса.')}}</p>
        </div>
        <div class="hotel-slider ">
            @foreach($hotels as $h)
                <div class="justify-end !items-start lg:!items-center">
                    <img src="/storage/{{$h->image}}" alt="">
                    <p class="uppercase font-medium text-xs lg:text-sm justify-end items-end px-2 py-1 mr-0 lg:mr-4 rounded-none lg:rounded-lg bg-[#FFD500] w-max lg:tex-sm">{{$h->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section id="about-us">
    <div class="separator h-4 bg-[#FFD500]"></div>
    <div class="bg-regal-blue px-8 py-4 lg:px-28 text-white">
        <p class="text-3xl lg:text-5xl font-bold text-center lg:text-left ">{{__('О НАС')}}</p>
        <p class="text-sm text-center lg:text-left lg:text-xl">{{__('Мы организуем ваш отдых на весь период вашего прибывания!')}}</p>
    </div>
    <div class=" px-8 py-4 lg:px-28">
        <div class="lg:flex">
            <div class=" lg:w-1/2">
                <p class="lg:whitespace-pre-line mb-4 text-regal-blue text-3xl lg:text-5xl font-bold">{{__('Приветствуем вас от компании
                            Рувен Трэвел!')}}</p>
                <p class="lg:whitespace-pre-line text-gray-500 lg:text-xl">{{__('Уважаемые гости Азербайджана! Представляем нашу компанию «Рувен Трэвел».
                    Мы работаем срынками Израиля, Пакистана, Дубая и России с 2011 года.
                    Наша компания предоставляет следующиеуслуги:
                     - Составление индивидуального маршрута поездки;
                     - Предоставление проживания в отелях 3*, 4* и 5*.
                     в Баку и регионах;
                     - Предоставлять туристические пакеты, которые соответствуют вашим бюджетам и потребностям;
                     - Предоставление авторских туров:туры для мамы; семейные туры; фототуры и др.
                     - Организуем бизнес конференции и корпоративысобытия.')}}</p>
            </div>
            <div class="lg:w-1/2 lg:flex lg:justify-center">
                <img src="{{asset('assets/img/map.png')}}" alt="">
            </div>
        </div>
        <div class="about-us-slider">
            @foreach($gallery as $t)
                <div class="justify-end items-end {{$loop->even ? 'lg:!items-start': 'lg:!items-end justify-end'}}">
                    <img src="/storage/{{$t->image}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</section>
<footer>
    <div class="flex flex-col gap-y-4 lg:flex-row bg-regal-blue px-8 py-4 lg:px-28">
        <div class="lg:w-1/3 flex justify-center">
            <img src="{{asset('assets/img/footer-logo.png')}}" alt="" style="width: 124px">
        </div>
        <div class=" flex flex-col-reverse lg:flex-row gap-y-4 w-full lg:justify-between lg:gap-x-36">
            <div class="socials flex flex-col justify-center lg:w-1/2 text-center">
                <p class="uppercase font-medium text-3xl text-white mb-2">{{__('SOCIAL NETWORK')}}</p>
                <div class="flex justify-center gap-x-4">
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100091791422822&mibextid=ZbWKwL">
                        <img src="{{asset('assets/img/socials/facebook.svg')}}" alt="" style="width: 25px">
                    </a>
                    <a target="_blank" href="https://instagram.com/ruventravel?igshid=ZDdkNTZiNTM=">
                        <img src="{{asset('assets/img/socials/instagram.svg')}}" alt="" style="width: 25px">
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/93225013/admin/?feedType=following">
                        <img src="{{asset('assets/img/socials/linked.svg')}}" alt="" style="width: 25px">
                    </a>
                    <a target="_blank" href="https://www.tiktok.com/@user1814022881614">
                        <img src="{{asset('assets/img/socials/tik-tok.svg')}}" alt="" style="width: 25px">
                    </a>
                    <a target="_blank" href="https://invite.viber.com/?g2=AQBWIddFKazRdFDzDMq687ewFTbjWukSuMJX%2FRkRSodH7pVdQYwC2TF7UKycEEhU">
                        <img src="{{asset('assets/img/socials/viber.svg')}}" alt="" style="width: 25px">
                    </a>
                    <a target="_blank" href="whatsapp://send?phone=994516819308@s.whatsapp.com">
                        <img src="{{asset('assets/img/socials/whatsapp.svg')}}" alt="" style="width: 25px">
                    </a>
                </div>
            </div>
            <div class="text-white lg:1/2 text-center lg:text-xl flex flex-col justify-center">
                <p>{{__('E-mail')}}: ruventravel@gmail.com</p>
                <p>{{__('Tel')}}: +994 51 681 93 08, +994 51 493 93 02</p>
                <p>{{__('Address')}}:Baku, Ashiq Molla Cuma 1a</p>
            </div>
        </div>
    </div>
</footer>

<div id="defaultModal" tabindex="-1" aria-hidden="true" class="bg-regal-blue/[.7] fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full max-h-full">
    <div class="relative flex justify-center">
        <div class="relative w-full lg:w-4/5 bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="tour-detail border-b rounded-t dark:border-gray-600">

            </div>
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="defaultModal" type="button" class=" close-button text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('Закрыть')}}</button>
            </div>
        </div>
    </div>
</div>
<div id="callToMe" class="!hidden">
    <div class="content lg:mx-auto bg-regal-blue p-4  px-8 lg:px-28 lg:w-3/5">
        <div class="flex justify-end">
            <button type="button" class="close-button text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal" onclick="closeCallToMe()">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FFFFFF" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <div class="header mb-4 flex flex-col gap-y-2 lg:gap-y-4 lg:w-max mx-auto">
            <p class="text-xl lg:text-3xl text-white">{{__('Оставьте контакты и мы с вами свяжемся')}}</p>
            <p class="text-xs lg:text-sm text-white">{{__('Менеджер свяжется с вами в ближайшее время и подробно проконсультирует по всем вопросам')}}</p>
        </div>
        <form class="call-to-me flex flex-col gap-y-4" action="/form/callToMe" method="POST">
            @csrf
            <div>
                <input class="py-4 px-2 w-full outline-0 rounded-lg" type="text" name="name" placeholder="{{__('Ваше имя:')}}">

            </div>
            <div>
                <input class="py-4 px-2 w-full outline-0 rounded-lg" type="text" name="phone" placeholder="+994 (---) --- -- --" value="994">
            </div>
            <input  type="submit" value="{{__('ПОДТВЕРДИТЬ')}}" class="cursor-pointer uppercase w-max px-4 py-2 font-bold bg-[#FFD500] rounded-lg">
            <div class="hidden loading" role="status">
                <svg aria-hidden="true" class="inline w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
            <div class="success-message hidden p-2 mb-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{__('Ваша заявка принята')}}</span>
            </div>
        </form>
    </div>
</div>
<div id="order" class="!hidden w-full">
    <div class="content h-full lg:h-5/6 overflow-y-scroll w-full lg:mx-auto bg-regal-blue p-4  px-8 lg:px-28 lg:w-3/5">
        <div class="flex justify-end">
            <button type="button" class="close-button text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal" onclick="closeOrder()">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FFFFFF" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <div class="header mb-4">
            <p class=" border-b text-xl lg:text-3xl text-white">{{__('ОСТАВЬТЕ ЗАЯВКУ')}}</p>
        </div>
        <form class="order flex flex-col gap-y-4" action="/form/order" method="POST">
            @csrf
            <div class="text-white  text-xl lg:text-3xl">
                <div class="flex mb-4 flex-col lg:flex-row lg:gap-x-6">
                    <div class="lg:w-1/2">
                        <p class="mb-2 text-xl lg:text-3xl text-white">{{__('Выберите туры')}}</p>
                        <div class="custom-select">
                            <p class="rounded-lg p-2 text-gray-400 bg-white cursor-pointer" onclick="openCustomSelectMenu(this)">{{__('Select')}}</p>
                            <div class="custom-options">
                                @foreach($data as $d)
                                    <p data-id="{{$d->id}}" class="option text-xl relative" onclick="selectTour(this)">{{$d->name}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 flex gap-x-4">
                        <div>
                            <p class="mb-2">{{__('Взрослые')}}</p>
                            <div class="custom-select w-32">
                                <input type="hidden" name="adultsCount" value="0">
                                <p class="current-value rounded-lg p-2 text-gray-400 bg-white cursor-pointer" onclick="openCustomSelectMenu(this)">0</p>
                                <div class="custom-options">
                                    <p class="option text-xl relative" onclick="selectAdultsCount(this)">0</p>
                                    <p class="option text-xl relative" onclick="selectAdultsCount(this)">1</p>
                                    <p class="option text-xl relative" onclick="selectAdultsCount(this)">2</p>
                                    <p class="option text-xl relative" onclick="selectAdultsCount(this)">3</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="mb-2">{{__('Дети ( до 6)')}}</p>
                            <div class="custom-select w-32" onclick="">
                                <input type="hidden" name="childCount" value="0">
                                <p class="current-value rounded-lg  p-2 text-gray-400 bg-white cursor-pointer" onclick="openCustomSelectMenu(this)">0</p>
                                <div class="custom-options">
                                    <p class="option text-xl relative" onclick="selectChildCount(this)">0</p>
                                    <p class="option text-xl relative" onclick="selectChildCount(this)">1</p>
                                    <p class="option text-xl relative" onclick="selectChildCount(this)">2</p>
                                    <p class="option text-xl relative" onclick="selectChildCount(this)">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:gap-x-6">
                    <div class="lg:w-1/2">
                        <p class="mb-2 text-xl lg:text-3xl text-white">{{__('Выбрать дату')}}</p>
                        <input class="w-full p-2 rounded-lg  text-gray-400" type="date" name="date">
                    </div>
                    <div class="lg:w-1/2">
                        <p class="mb-2 text-xl lg:text-3xl text-white">{{__('Транспорт')}}</p>
                        <div class="custom-select">
                            <input type="hidden" name="transport">
                            <p class="current-value rounded-lg p-2 text-gray-400 bg-white cursor-pointer" onclick="openCustomSelectMenu(this)">{{__('Транспорт')}}</p>
                            <div class="custom-options">
                                @foreach($transports as $d)
                                    <p data-id="{{$d->id}}" class="option text-xl relative" onclick="selectTransport(this)">{{$d->name}}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex gap-x-4 lg:gap-x-6">
                    <div class="lg:w-1/2">
                        <p class="mb-2 text-xl lg:text-3xl text-white">{{__('Имя')}}</p>
                        <input class="outline-0 w-full p-2 rounded-lg  text-gray-400" type="text" name="name">
                    </div>
                    <div class="lg:w-1/2">
                        <p class="mb-2 text-xl lg:text-3xl text-white">{{__('Фамилия')}}</p>
                        <input class="outline-0 w-full p-2 rounded-lg  text-gray-400" type="text" name="surname">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:gap-x-6">
                    <div class="w-3/5 lg:w-1/2">
                        <p class="mb-2 text-xl lg:text-3xl text-white">{{__('E-mail')}}</p>
                        <input class="outline-0 w-full p-2 rounded-lg  text-gray-400" type="email" name="email">
                    </div>
                    <div class="w-4/5 lg:w-1/2">
                        <p class="mb-2 text-xl lg:text-3xl text-white">{{__('Телефон')}}</p>
                        <input class="outline-0 w-full p-2 rounded-lg  text-gray-400" type="text" name="phone" value="+994">
                    </div>
                </div>
                <div>
                    <p class="mb-2 text-xl lg:text-3xl text-white">{{__('Заметка')}}</p>
                    <textarea class="w-full text-gray-400 rounded-lg p-2" name="note" id="" cols="30" rows="6"></textarea>
                </div>
            </div>
            <input  type="submit" value="{{__('ПОДТВЕРДИТЬ')}}" class="cursor-pointer uppercase w-max px-4 py-2 font-bold bg-[#FFD500] rounded-lg">
            <div class="hidden loading" role="status">
                <svg aria-hidden="true" class="inline w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
            <div class="success-message hidden p-2 mb-2 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{__('Ваша заявка принята')}}</span>
            </div>
        </form>
    </div>
</div>
</body>
<script>
    document.querySelectorAll('.active-lang').forEach(elem => {
    elem.addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.locales').classList.toggle('hidden')
        })
    })
    document.querySelector('.mobile-menu .close-button').addEventListener('click', (e) => {
        e.preventDefault();
        $('.mobile-menu').hide();
        $('html, body').css({
            overflow: 'auto',
            height: 'auto'
        });
    })

    $('.menu-button').click(function (e) {
        e.preventDefault();
        $('.mobile-menu').show();
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
    });
    $('.transport-slider').slick({
        centerMode: true,
        adaptiveHeight: true,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        centerPadding: '0px',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    centerMode: true,
                }
            },
        ]
    });


    $('.hotel-slider').slick({
        centerMode: true,
        adaptiveHeight: true,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        arrows: true,
        centerPadding: '0px',
        dots: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    dots: true, // включаем точки
                    dotsClass: 'slick-dots numeric',
                    slidesToShow: 3,
                    autoplay:true,
                    slidesToScroll: 3,
                    centerMode: true,
                    spacing: 40,
                    arrows: false,
                }
            },
        ]
    });

    $('.about-us-slider').slick({
        centerMode: true,
        adaptiveHeight: true,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        centerPadding: '0px',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    infinite: true,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    centerMode: true,
                    arrows: true,
                }
            },
            {
                breakpoint: 1440,
                settings: {
                    infinite: true,
                    autoplay: true,
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    centerMode: true,
                    arrows: true,
                }
            },
        ]
    });

    function clickMenu(){
        $('.mobile-menu').hide();
        $('html, body').css({
            overflow: 'auto',
            height: 'auto'
        });
    }

    $('.tour-click').click((e) => {
        e.preventDefault();
        const id = $(e.target).attr('data-tour-id');
        $.ajax({
            url:'/tour/' + id,
            async:false,
            success: function (data){
                $('.tour-detail').html(data);
                $('.close-button').click(() => {
                    $('#defaultModal').hide();
                })
            }
        })
        $('#defaultModal').show();
    })
    function callToMe(e){
        e.preventDefault();
        $('#callToMe').removeClass('!hidden');
    }
    function closeCallToMe(){
        $('#callToMe').addClass('!hidden');
    }
    $('input[name= "phone"]').inputmask('(+994)99-999-99-99');

    $('.call-to-me').on('submit', (event) => {
        event.preventDefault();
        const url =  $('.call-to-me').attr('action');
        const method =  $('.call-to-me').attr('method');
        $('.loading').removeClass('hidden')
        $('.call-to-me input[type="submit"]').addClass('hidden')
        $.ajax({
            url:url,
            method:method,
            data: {
                name:$('input[name="name"]').val(),
                phone:$('input[name="phone"]').val()
            },
            headers: {'X-CSRF-TOKEN': $('input[name="_token').val()},
            success: (data) => {
                $('.loading').addClass('hidden')
                $('.call-to-me input[type="submit"]').removeClass('hidden')
                $('.call-to-me .success-message').removeClass('hidden')
                console.log(data)
            },
            error: (e) => {
                $('input[name="name"]').removeClass('hidden');
                $('.loading').addClass('hidden')
                $('.call-to-me input[type="submit"]').removeClass('hidden');
                const errors = e.responseJSON.errors;
                for (const [key, value] of Object.entries(errors)) {
                    $(`input[name="${key}"]`).addClass('class="w-full px-4 py-2 text-red-900 placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 focus:ring-1');
                    $(`input[name="${key}"]`).after(`<span class="error-message inline-flex text-sm text-red-700">${value}</span>`);
                }

            }

        })
    })

    $('.order').on('submit', (event) => {
        event.preventDefault();
        var data = JSON.stringify( $(event.target).serializeArray() )
        const url =  $('.order').attr('action');
        const method =  $('.order').attr('method');
        $('.loading').removeClass('hidden')
        $('.order input[type="submit"]').addClass('hidden')
        $.ajax({
            url:url,
            method:method,
            data: $(event.target).serializeArray() ,
            headers: {'X-CSRF-TOKEN': $('input[name="_token').val()},
            success: (data) => {
                $('.loading').addClass('hidden')
                $('.order input[type="submit"]').removeClass('hidden')
                $('.order .success-message').removeClass('hidden')
                console.log(data)
            },
            error: (e) => {
                $('input[name="name"]').removeClass('hidden');
                $('.loading').addClass('hidden')
                $('.order input[type="submit"]').removeClass('hidden');
                const errors = e.responseJSON.errors;
                for (const [key, value] of Object.entries(errors)) {
                    $(`input[name="${key}"]`).addClass('class="w-full px-4 py-2 text-red-900 placeholder-red-700 border border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 focus:ring-1');
                    $(`input[name="${key}"]`).after(`<span class="error-message inline-flex text-sm text-red-700">${value}</span>`);
                }

            }

        })
    })

    function order(e){
        e.preventDefault();
        $('#order').removeClass('!hidden');
    }
    function closeOrder(){
        $('#order').addClass('!hidden');
    }

    function openCustomSelectMenu(elem){
        $(elem).closest('.custom-select').toggleClass('open')
    }

    function  selectTour(elem){
        $(elem).toggleClass('selected');
        $(elem).closest('.custom-select').find('input[type="hidden"]').remove();
        $(elem).closest('.custom-options').find('.selected').each((key,value) => {
            $(elem).closest('.custom-select').prepend(`<input type="hidden" name=tours[]" value="${$(value).attr('data-id')}">`)
        })

    }
    async function  selectAdultsCount(elem){
        const value = $(elem).html();
        console.log(value)
        await $(elem).closest('.custom-options').find('p').removeClass('selected');
        $(elem).closest('.custom-select').removeClass('open');
        $(elem).closest('.custom-select').find('.current-value').html(value);
        $(elem).closest('.custom-select').find('input[type="hidden"]').val(value);
        $(elem).toggleClass('selected');

    }
    async function  selectChildCount(elem){
        const value = $(elem).html();
        await $(elem).closest('.custom-options').find('p').removeClass('selected');
        $(elem).closest('.custom-select').removeClass('open');
        $(elem).closest('.custom-select').find('.current-value').html(value);
        $(elem).closest('.custom-select').find('input[type="hidden"]').val(value);
        $(elem).toggleClass('selected');
    }
    async function selectTransport(elem){
        const value = $(elem).html()
        await $(elem).closest('.custom-options').find('p').removeClass('selected');
        $(elem).closest('.custom-select').removeClass('open');
        $(elem).closest('.custom-select').find('.current-value').html(value);
        $(elem).closest('.custom-select').find('input[type="hidden"]').val($(elem).attr('data-id'));
        $(elem).toggleClass('selected');
    }
</script>
</html>
