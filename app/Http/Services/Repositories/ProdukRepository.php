<?php

namespace App\Http\Services\Repositories;

use App\Http\Services\Repositories\BaseRepository;
use App\Http\Services\Repositories\Contracts\ProdukContract;
use App\Models\Produk;

class ProdukRepository extends BaseRepository implements ProdukContract
{
	/**
	 * @var
	 */
	protected $model;

	public function __construct(Produk $model)
	{
		$this->model = $model;
	}

	public function paginated(array $criteria)
	{
		$perPage = $criteria['jml'] ?? 5;
		$field = $criteria['sort_field'] ?? 'id';
		$sortOrder = $criteria['sort_order'] ?? 'desc';

		$search = $criteria['cari'] ?? '';
		return $this->model->when($search, function ($query) use ($search) {
			$query->where('namaProduk', 'like', "%{$search}%");
		})->orderBy('id', 'asc')->paginate($perPage);
	}
}
