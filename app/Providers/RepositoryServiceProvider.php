<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\Repositories\BaseRepository;
use App\Http\Services\Repositories\Contracts\BaseRepositoryInterface;
use App\Http\Services\Repositories\Contracts\GaleriContract;
use App\Http\Services\Repositories\Contracts\KategoriContract;
use App\Http\Services\Repositories\Contracts\KegiatanContract;
use App\Http\Services\Repositories\Contracts\KomentarContract;
use App\Http\Services\Repositories\Contracts\KontakContract;
use App\Http\Services\Repositories\Contracts\MenuContract;
use App\Http\Services\Repositories\Contracts\pembayaranContract;
use App\Http\Services\Repositories\Contracts\pesananContract;
use App\Http\Services\Repositories\Contracts\ProdukContract;
use App\Http\Services\Repositories\Contracts\UserContract;
use App\Http\Services\Repositories\Contracts\RoleContract;
use App\Http\Services\Repositories\Contracts\SejarahContract;
use App\Http\Services\Repositories\Contracts\UserMenuContract;
use App\Http\Services\Repositories\Contracts\WisataContract;
use App\Http\Services\Repositories\GaleriRepository;
use App\Http\Services\Repositories\KategoriRepository;
use App\Http\Services\Repositories\KegiatanRepository;
use App\Http\Services\Repositories\KomentarRepository;
use App\Http\Services\Repositories\KontakRepository;
use App\Http\Services\Repositories\MenuRepository;
use App\Http\Services\Repositories\pesananRepository;
use App\Http\Services\Repositories\ProdukRepository;
use App\Http\Services\Repositories\UserRepository;
use App\Http\Services\Repositories\RoleRepository;
use App\Http\Services\Repositories\SejarahRepository;
use App\Http\Services\Repositories\WisataRepository;
use App\Http\Services\Repositories\pembayaranRepository;
use App\Http\Services\Repositories\UserMenuRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);

        $this->app->bind(RoleContract::class, RoleRepository::class);
        $this->app->bind(UserContract::class, UserRepository::class);

        $this->app->bind(KegiatanContract::class, KegiatanRepository::class);
        $this->app->bind(KategoriContract::class, KategoriRepository::class);
        $this->app->bind(WisataContract::class, WisataRepository::class);
        $this->app->bind(SejarahContract::class, SejarahRepository::class);
        $this->app->bind(GaleriContract::class, GaleriRepository::class);
        $this->app->bind(KomentarContract::class, KomentarRepository::class);
        $this->app->bind(KontakContract::class, KontakRepository::class);
        $this->app->bind(ProdukContract::class, ProdukRepository::class);
        $this->app->bind(pesananContract::class, pesananRepository::class);
        $this->app->bind(pembayaranContract::class, pembayaranRepository::class);
        $this->app->bind(UserMenuContract::class, UserMenuRepository::class);
        $this->app->bind(MenuContract::class, MenuRepository::class);
    }
}
