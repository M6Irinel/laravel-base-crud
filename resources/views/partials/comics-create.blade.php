<section class="for-main relative z-full">
    <div class="bg">
        <main class="text-white fw-bold py-4 container">
            <button class="but px-3 py-1">Creazione di un nuovo COMIC</button>
            <div class="my-3">
                <form action="{{ route('comics.store') }}" method="POST">

                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Nome del titolo" value="{{old('title')}}">
                        @error('title')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" class="form-control" id="description" rows="3" value="{{old('description')}}"></textarea>
                        @error('description')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="thumb">Thumb</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Inserisci l'URL del immagine" value="{{old('thumb')}}">
                        @error('thumb')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" min="0" placeholder="0.00" value="{{old('price')}}">
                        @error('price')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="series">Tipo di serie</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci il tipo di serie" value="{{old('series')}}">
                        @error('series')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="sale_date">Data di uscita</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="es: yyyy-mm-dd" value="{{old('sale_date')}}">
                        @error('sale_date')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="type">Tipo</label>
                        <select class="form-control" id="type" name="type" value="{{old('type')}}">
                            <option value="0">--select type--</option>
                            <option value="1">comic book</option>
                            <option value="2">graphic novel</option>
                        </select>
                        @error('type')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="contenitor-but">
                        <button type="submit" class="but2 px-5 py-2 rounded-5">Invia</button>
                    </div>

                </form>
            </div>
        </main>
    </div>
</section>
