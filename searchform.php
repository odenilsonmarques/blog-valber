<form role="search"
    method="get"
    class="search-form d-flex justify-content-center"
    action="<?php echo esc_url(home_url('/')); ?>">

    <div class="input-group w-75 w-md-50">

        <input type="search"
            class="form-control"
            placeholder="Buscar no blog…"
            value="<?php echo get_search_query(); ?>"
            name="s"
            aria-label="Buscar">

        <button type="submit" class="btn btn-outline-secondary">
            Buscar
        </button>

    </div>
</form>

