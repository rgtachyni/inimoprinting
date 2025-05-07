<?php

namespace App\Http\Services\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface pesananContract
{
	/**
	 * params string $search
	 * @return Collection
	*/

	public function paginated(array $request);
}