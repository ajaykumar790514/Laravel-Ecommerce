<div>

    <div class="px-lg-5 p-3">
        <h5 class="text-center fw-semibold">Creating the Perfect Custom T-Shirt</h5>
        <p class="text-center px-md-5 px-2">Designing a custom T-shirt involves defining its purpose, considering the
            audience, selecting readable fonts and high-quality graphics, choosing complementary colors and comfortable
            materials, and incorporating branding elements like logos and taglines to create a cohesive and appealing
            design.</p>
    </div>
    <div class=" row " style="overflow-x: hidden">
        <div class="col-md-6 pb-3 d-flex justify-content-center align-items-center p-3" wire:ignore>
            <div id="tshirt-div">
                <img id="tshirt-backgroundpicture"
                    src="https://ourcodeworld.com/public-media/gallery/gallery-5d5afd3f1c7d6.png" />
                <div id="drawingArea" class="drawing-area">
                    <div class="canvas-container">
                        <canvas id="tshirt-canvas" width="120" height="200"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 p-4 drawerMain">





            <div>
                <label for="tshirt-color">Color:</label>
                <div class="d-flex flex-wrap ">
                    @foreach ($colors as $t_color)
                    <div class="mx-1 form-group">
                        <label for="{{$t_color->color}}" class="p-3 rounded-circle border " title="{{$t_color->name}}"
                            style="background-color: {{$t_color->color}} ;cursor:pointer "></label>
                        <input type="radio" name="tshirt-color" id="{{$t_color->color}}" wire:model.live='color' hidden
                            value="{{$t_color->color}}">
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="py-1 d-flex  align-items-center ">
                <h4 class="text-info">₹ {{$material->offer_price}}</h4>
                <del class="text-danger ml-3 ">₹ {{$material->price}}</del>
            </div>
            <div>
                <div class="d-flex mt-2">
                    @foreach ($sizes as $t_size)
                    <div class="mx-1">
                        <label for="{{$t_size->code}}" style="cursor: pointer"
                            class="py-2  {{ $size === $t_size->code ? 'bg-info text-white' : '' }} px-4 text-uppercase fw-semibold rounded border "
                            title="{{$t_size->name}}">{{$t_size->code }}</label>
                        <input type="radio" name="" id="{{$t_size->code}}" wire:model.live='size' hidden
                            value="{{$t_size->code}}">
                    </div>

                    @endforeach
                </div>
            </div>

            <div class="mt-1">
                <label for="">T-Shirt Material:</label>
                <div class="d-flex flex-wrap">
                    @foreach ($tshirt_materials as $tshirt_material)

                    <button wire:click="changeMaterial({{$tshirt_material->id}})"
                        class="btn mr-3 {{ $material->name === $tshirt_material->name ? 'bg-info text-white' : '' }}">
                        {{$tshirt_material->name}}
                    </button>

                    @endforeach
                    {{-- {{$material->name}} --}}
                </div>
                <div class="mt-4  addtoCartabtn">
                    <div class="">
                        <button class="btn btn-info  " onclick="openMenu()"> <i class="fa fa-edit mr-3"></i> Custom
                            Design</button>
                    </div>
                    <div>
                        <button class="btn btn-info px-5 "> <i class="fa fa-shopping-cart mr-3"></i>
                            Add To Cart</button>
                    </div>
                </div>
                
                <div class="emptyBorder"></div>

                <p>{{$material->description}}</p>
            </div>


            <div id="drawerDiv" class="drawerDiv p-3 rounded" wire:ignore>

                <div class="closeBtn">
                    <button class="btn btn-secondary " onclick="closeMenu()">Close</button>
                </div>
                <p>To remove a loaded picture on the T-Shirt select it and press the <kbd>DEL</kbd> key.</p>
                <div>
                    <label for="tshirt-custompicture">Upload your own design:</label>
                    <input type="file" class="border rounded p-1" id="tshirt-custompicture" />
                </div>
            </div>



        </div>

    </div>
</div>