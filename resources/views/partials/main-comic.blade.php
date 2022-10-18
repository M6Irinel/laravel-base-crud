<section class="for-main relative" style="z-index: 10000;">
    <div class="bg-white">
        <main class="fw-bold">
            <div class="bg-blue-DC">
                <div class="container relative">
                    <a class="block decoration-none-H border border-white t-center absolute left white gray-1-H bg-azure-DC pointer scale-H transition-transform duration-2"
                        href="{{ route('comics.index') }}">
                        <div>
                            <img width="190" src="{{ asset($comic['thumb']) }}" alt="{{ $comic['title'] }}">
                        </div>
                        VIEW GALLERY
                    </a>
                </div>
            </div>
            <div class="container py-20">
                <div class="d-flex gap-45">
                    <div class="grow">
                        <h1 class="bold uppercase azure-9">{{ $comic['title'] }}</h1>
                        <div class="price d-flex between">
                            <button class="grow flex between i-center p-3 bg-transparent t-left border-DC-price">
                                <p class="green-1 grow m-0">U.S. Price: <strong
                                        class="white">{{ $comic['price'] }}</strong></p>
                                <div class="green-1">AVAILABLE</div>
                            </button>
                            <div class="p-3">
                                <select class="white bold pointer">
                                    <option><strong>Check Availability</strong></option>
                                </select>
                            </div>
                        </div>
                        <p class="gray-7 mt-6">{{ $comic['description'] }}</p>
                    </div>
                    <div>
                        <div class="text-right font-weight-bold">ADVERTISMENT</div>
                        <img src="{{ asset('./img/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="bg-gray-DC py-8">
                <div class="flex between container gap-50">

                    <table class="f-col-6">
                        <thead>
                            <tr class="border-b border-b-gray-2">
                                <th class="azure-9 pb-3">Specs</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-b-gray-2">
                                <td class="py-2 azure-8 fs-2">Series:</td>
                                <td class="gray-7 text-primary fs-2">{{ strtoupper($comic['series']) }}</td>
                            </tr>

                            <tr class="border-b border-b-gray-2">
                                <td class="py-2 azure-8 fs-2">U.S. Price:</td>
                                <td class="gray-7 fs-2">{{ $comic['price'] }}</td>
                            </tr>

                            <tr class="border-b border-b-gray-2">
                                <td class="py-2 azure-8 fs-2">On Sale Date:</td>
                                <td class="gray-7 fs-2">{{ $comic['sale_date'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-gray-1">
                <div class="container py-3 flex gap-30 center">
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning bold shadow-sm">Modifica</a>
                    <button onclick="attiva()" class="btn btn-danger bold shadow-sm">Elimina</button>
                </div>
            </div>

            <div id="form" class="fixed top-50 left-50 translate-50 bg-gray-1 rounded-5 p-3 shadow">

                <p>Sei sicuro di voler fare l'eliminazione?</p>

                <div class="d-flex center gap-20">
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="f-col-3 grow">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="inline-block btn btn-danger bold shadow-sm w-100" value="SI" />
                    </form>

                    <div class="f-col-3 grow">
                        <button onclick="attiva()" class="btn btn-success bold shadow-sm w-100">NO</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        const form = document.querySelector('#form');
        form.style.display = "none";
        let attivo = false;

        function attiva() {
            attivo = !attivo;
            if (attivo)
                form.style.display = "block";
            else
                form.style.display = "none";
        }
    </script>
</section>
