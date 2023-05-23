<div class=" flex bg-regal-blue items-center justify-between p-y-4  px-8 lg:px-28">
    <div class="my-2 w-full">
        <div class="flex justify-between py-2">
            <div class="flex flex-col lg:flex-row">
                <h3 class="uppercase text-xl lg:text-3xl font-semibold text-white">
                    {{__('Горящие туры')}}
                </h3>
                <div class="flex items-center gap-x-2">
                    <img class="lg:mx-4 w-16" src="{{asset('assets/img/arrow.svg')}}" alt="">
                    <h3 class="uppercase text-xs lg:!text-xl font-semibold text-white">
                        {{$tour->name}}
                    </h3>
                </div>
            </div>
           <button type="button" class="close-button text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
               <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#FFFFFF" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               <span class="sr-only">Close modal</span>
           </button>
        </div>
        <p class="text-white text-center text-xs lg:text-md lg:!text-left">{{__('Мы организуем ваш отдых на весь период вашего прибывания!')}}</p>
    </div>
</div>
<div class="my-4 w-full  px-8 lg:px-28 lg:flex">
    <div class="lg:w-1/2">
        <div class="tour-detail-swiper">
            @foreach(json_decode($tour->images) as $img)
                <div class="rounded-[20px] overflow-hidden">
                    <img class="w-full object-cover h-full" src="/storage/{{$img}}" alt="">
                </div>
            @endforeach
        </div>
        <div class="w-full tour-gallery hidden lg:flex gap-x-4 justify-center my-4">
            <img class="w-1/2 rounded-[20px] object-cover overflow-hidden" src="/storage/{{json_decode($tour->images)[0]}}" alt="">
            <img class="w-1/2 rounded-[20px] object-cover overflow-hidden" src="/storage/{{json_decode($tour->images)[1]}}" alt="">
        </div>
    </div>
    <div class="w-full px-8">
        <h3 class="mb-1 lg:mb-4 text-xl lg:!text-3xl font-bold text-regal-blue">{{$tour->name}}</h3>
        <div class="flex items-center">
            <img src="{{asset('assets/img/travel.svg')}}" alt="" style="width: 31px;
                                                                                height: 30px">
            <p class="font-medium text-[#575757]">{{__('Выезд из отеля')}}</p>
        </div>
        <div class="mb-4 flex items-center">
            <img src="{{asset('assets/img/time.svg')}}" alt="">
            <p class="font-medium text-[#575757]">{{__('Длительность (дней):')}} {{$tour->duration}}</p>
        </div>
        <p class="whitespace-pre-line whitespace-pre-line text-xs lg:text-sm text-[#575757] lg:w-3/5">{{$tour->text}}</p>
        <div class="my-4 text-center lg:!text-left">
            <p class="mb-2 lg:!text-left font-medium text-center">{{__('Цена устанавливается по запросу')}}</p>
            <a class="uppercase font-bold bg-[#FFD500] px-4 py-1 rounded-full" href="">
                {{__('ОФОРМИТЕ ЗАЯВКУ')}}
            </a>
            <p class="hidden lg:block text-right">{{__('Цены начинаются от').' '.$tour->price.' '.__('на человека')}}</p>
        </div>
    </div>
</div>
<script>
    $('.tour-detail-swiper').slick({
        centerMode: true,
        adaptiveHeight: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        centerPadding: '0px',
    })
</script>
