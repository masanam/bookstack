@extends('layouts.simple')

@section('body')

    <div class="container">

        <div class="my-s">
            @include('entities.breadcrumbs', ['crumbs' => [
                $book,
                $book->getUrl('/sort') => [
                    'text' => trans('entities.books_sort'),
                    'icon' => 'sort',
                ]
            ]])
        </div>

        <div class="grid left-focus gap-xl">
            <div>
                <div component="book-sort" class="card content-wrap auto-height">
                    <h1 class="list-heading">{{ trans('entities.books_sort') }}</h1>

                    <div class="flex-container-row gap-m wrap mb-m">
                        <p class="text-muted flex min-width-s mb-none">{{ trans('entities.books_sort_desc') }}</p>
                        <div class="min-width-s">
                            @php
                                $autoSortVal = intval(old('auto-sort') ?? $book->sort_rule_id ?? 0);
                            @endphp
                            <label for="auto-sort">{{ trans('entities.books_sort_auto_sort') }}</label>
                            <select id="auto-sort"
                                    name="auto-sort"
                                    form="sort-form"
                                    class="{{ $errors->has('auto-sort') ? 'neg' : '' }}">
                                <option value="0" @if($autoSortVal === 0) selected @endif>-- {{ trans('common.none') }}
                                    --
                                </option>
                                @foreach(\BookStack\Sorting\SortRule::allByName() as $rule)
                                    <option value="{{$rule->id}}"
                                            @if($autoSortVal === $rule->id) selected @endif
                                    >
                                        {{ $rule->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div refs="book-sort@sortContainer">
                        @include('books.parts.sort-box', ['book' => $book, 'bookChildren' => $bookChildren])
                    </div>

                    <form id="sort-form" action="{{ $book->getUrl('/sort') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <input refs="book-sort@input" type="hidden" name="sort-tree">
                        <div class="list text-right">
                            <a href="{{ $book->getUrl() }}" class="button outline">{{ trans('common.cancel') }}</a>
                            <button class="button" type="submit">{{ trans('entities.books_sort_save') }}</button>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <main class="card content-wrap auto-height sticky-top-m">
                    <h2 class="list-heading">{{ trans('entities.books_sort_show_other') }}</h2>
                    <p class="text-muted">{{ trans('entities.books_sort_show_other_desc') }}</p>

                    @include('entities.selector', ['name' => 'books_list', 'selectorSize' => 'compact', 'entityTypes' => 'book', 'entityPermission' => 'update'])

                </main>
            </div>
        </div>

    </div>

@stop
