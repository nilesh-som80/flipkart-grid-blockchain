@include('include.header')


<main id="content">
    <div class="space-bottom-2 space-bottom-lg-3">
        <div class="pb-lg-1">
            <div class="page-header border-bottom">
                <div class="container">
                    <div class="d-md-flex justify-content-between align-items-center py-4">
                        <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Authors</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="u-cubeportfolio mb-5 mb-lg-7">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Author ID</th>
                                <th>Author Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($res['data'] as $author)
                                <tr>
                                    <td>{{ $author->author_id }}</td>
                                    <td>{{ $author->name }}</td>
                                    <td><a href="/book_by_author/{{ $author->author_id }}"><button>Show
                                                Books</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@include('include.footer')

<script type="text/javascript">
    getCategory();

    function getCategory() {
        $.ajax({
            url: '/api/category',
            method: 'GET',
            success: function(response) {
                // console.log(response);
                response.forEach(category => {
                    console.log(category.name);
                    $('#category').append(
                        `<li class="has-submenu">
                                <a href="/book_by_category/${category.category_id}" data-submenu="art-photo">${category.name}</a>
                            </li>`
                    )
                })
            }
        })
    }
</script>

</body>

</html>
