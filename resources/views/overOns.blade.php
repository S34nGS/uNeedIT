<x-app-layout>
    <x-slot:title>
        Over ons
    </x-slot:title>


    <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div 
        class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ asset('images/40gp-uneedit5.jpg') }}')"
        title="Woman holding a mug">
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center">
              <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
              </svg>
              Members only
            </p>
            <div class="text-gray-900 font-bold text-xl mb-2">Can coffee make you a better developer?</div>
            <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="/img/jonathan.jpg" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Jonathan Reinink</p>
              <p class="text-gray-600">Aug 18</p>
            </div>
          </div>
        </div>
      </div>





    {{-- <div class="text-red-500" >
        <p > Over Ons</p>
    </div>
    <div class="ootext">
        <p class="white-text">
            Welkom bij Uneed-it, uw vertrouwde partner voor al uw reparatiebehoeften. Bij Uneed-it streven we ernaar hoogwaardige kwalitatieve reparatiediensten te bieden met een onwrikbare focus op klanttevredenheid en excellentie in kwaliteit.
        </p>
        <p class="white-text">
            Met een schat aan ervaring in de sector hebben we een onberispelijke reputatie opgebouwd als een bedrijf dat synoniem staat voor vakmanschap, snelle service en eerlijke prijzen. Of het nu gaat om het herstellen van elektronica, huishoudelijke apparaten, auto's of andere technische apparaten, ons team van deskundige technici staat paraat om uw problemen op te lossen en uw apparaten weer in optimale staat te herstellen.
        </p>
        <p class="white-text">
            Bij Uneed-it streven we naar een naadloze ervaring, vanaf het moment dat u contact met ons opneemt tot het moment dat u tevreden bent met de uitgevoerde reparatie. We begrijpen hoe essentieel uw apparaten zijn voor uw dagelijks leven, en daarom doen we er alles aan om ze snel en efficiënt te repareren, zodat u snel weer verder kunt.
        </p>
        <p class="white-text">
            Kies Uneed-it voor een professionele reparatieservice waarop u kunt vertrouwen. We staan klaar om u te helpen met al uw reparatiebehoeften.
        </p>
    </div> --}}
</x-app-layout>