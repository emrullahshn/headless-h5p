<?php

namespace Alsay\LaravelH5P\Dtos;

use Alsay\LaravelH5P\Dtos\Contracts\InstantiateFromRequest;
use Alsay\LaravelH5P\Repositories\Criteria\Primitives\EqualCriterion;
use Alsay\LaravelH5P\Repositories\Criteria\Primitives\LikeCriterion;
use Alsay\LaravelH5P\Enums\H5PPermissionsEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

    class ContentFilterCriteriaDto extends CriteriaDto implements InstantiateFromRequest
{
    public static function instantiateFromRequest(Request $request): self
    {
        $criteria = new Collection();
//        $user = auth()->user();

//        if ($request->has('title')) {
//            $criteria->push(new LikeCriterion('hh5p_contents.title', $request->input('title')));
//        }
////        if ($user->can(H5PPermissionsEnum::H5P_LIST) && $request->has('author_id')) {
//        if ($request->has('author_id')) {
//            $criteria->push(new EqualCriterion('hh5p_contents.user_id', $request->input('author_id')));
//        }
////        if (!$user->can(H5PPermissionsEnum::H5P_LIST) && $user->can(H5PPermissionsEnum::H5P_AUTHOR_LIST)) {
//        if (auth()->user()) {
//            $criteria->push(new EqualCriterion('hh5p_contents.user_id', auth()->user()->getKey()));
//        }
//        if ($request->has('library_id')) {
//            $criteria->push(new EqualCriterion('hh5p_contents.library_id', $request->input('library_id')));
//        }

        return new self($criteria);
    }
}
