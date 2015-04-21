<?php
return array(
    'url_base' => '{{ xhprof_url_base }}',
    'url_static' => null, // When undefined, it defaults to $config['url_base'] . 'public/'. This should be absolute URL.
    'pdo' => new PDO('mysql:dbname={{ xhprof_db_name }};host={{ xhprof_db_host }};charset=utf8', '{{ xhprof_db_user }}', '{{ xhprof_db_password }}'),
    'tmp_table_engine' => 'Memory', // MySQL Table Engine used for temporary tables
    'cache_expiration' => '60', // How many seconds a browser allowed to cache profilling results
    'profiler_enabled' => true, // Global switch to disable the profiler by default
    'min_wall_time' => 0, // Only store runs with total wall time greater than value (microseconds)
    'min_cpu_time' => 0, // Only store runs with total CPU time greater than value (microseconds)
    'min_mem_usage' => 0, // Only store runs with memory usage greater than value (bytes)
    'min_peak_mem_usage' => 0, // Only store runs with peak memory usage greater than value (bytes)
);
