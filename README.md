# eShop Display module

This is simple modules for displaying content from a database using laravel.

![Default look](https://gyazo.com/6562a78fdf437234eafcbf4837dc6b8b)

## Set-up 
* Fork this github
* Set-up database name my default name 'shopfaker'
 * change .env file for your database or create shopfaker database.
* Migrate database 'php artison migrate:refresh'
* Use 'php artisan db:seed' to seed database. its already set-up.
```
    public function run()
    {
        foreach (range(1,100) as $index) {
            DB::table('cardfaker')->insert([
                'name' => str_random(10),
                'body' => str_random(10) . '@gmail.com',

            ]);
        }
    }
```

## Database connetion
```
class CardController extends Controller
{
    public function index ()
    {
        $cards = DB::table('cardfaker')->get();
        return view('welcome', compact('cards'));
    }
}
```

## Routes
```
Route::get('/', 'CardController@index');
```

## Display 5 each
```
 @foreach ($cards->chunk(5) as $card)
                        <div class="row text-center" style="padding-bottom: 10px">
                            @foreach ($card as $split)
                                <div class="card">
                                    <h4 class="card-title">{{$split -> name}}</h4>
                                    <p class="card-text">{{$split -> body}}</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
```
