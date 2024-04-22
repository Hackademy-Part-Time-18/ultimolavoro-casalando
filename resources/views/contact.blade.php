<x-main>
 
       
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <form action="" method="Post" class="border rounded p-5">
                    
                    <div class="form-floating mb-3">
                        <input class="form-control  @error('name') is-invalid @enderror" id="name" required
                            name="name" value="{{ old('name') }}" type="text" placeholder="Enter your name...">
                        <label for="name">Nome</label>
                        @error('name')
                           
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                            value="{{ old('email') }}" type="text" placeholder="name@example.com">
                        <label for="email">Email address</label>
                        @error('email')
                           
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" type="text"
                            placeholder="Enter your message here..." style="height: 10rem">{{ old('message') }}</textarea>
                        <label for="message">Message</label>
                        @error('message')
                           
                        @enderror
                    </div>

                    <div class="grid gap-3 row">
                        <button class="btn btn-primary btn-lg px-5" type="submit">Invia</button>
                        <button class="btn btn-warning btn-lg px-5" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</x-main>