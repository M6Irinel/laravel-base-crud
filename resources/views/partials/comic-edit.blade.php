<section class="for-main relative z-full">
    <div class="bg">
        <main class="text-white fw-bold py-4 container">
            <button class="but px-3 py-1">Modifica il COMIC</button>
            <div class="my-3">
                <form action="{{ route('comics.update', $comic) }}" method="POST">

                    @csrf

                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Nome del titolo" value="{{old('title', $comic->title)}}">
                        @error('title')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea name="description" class="form-control" id="description" rows="3">{{old('description', $comic->description)}}</textarea>
                        @error('description')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="thumb">Thumb</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Inserisci l'URL del immagine" value="{{old('thumb', $comic->thumb)}}">
                        @error('thumb')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" min="0" placeholder="0.00" value="{{old('price', $comic->price)}}">
                        @error('price')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="series">Tipo di serie</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Inserisci il tipo di serie" value="{{old('series', $comic->series)}}">
                        @error('series')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="sale_date">Data di uscita</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="es: yyyy-mm-dd" value="{{old('sale_date', $comic->sale_date)}}">
                        @error('sale_date')
                            <div> {{ $message }} </div>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="type">Tipo</label>
                        <select class="form-control" id="type" name="type">
                            <option value="0">--select type--</option>
                            <option value="comic book" {{ $comic->type == 'comic book' ? 'selected' : ''}}>comic book</option>
                            <option value="graphic novel" {{ $comic->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
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
