<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<!-- Fullscreen -->
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css'
    rel='stylesheet' />

<!-- Leaflet Resizer -->
<link rel="stylesheet" href="<?php echo base_url(); ?>./assets/map_assets/resizer/L.Control.Resizer.css">
<script src="<?php echo base_url(); ?>./assets/map_assets/resizer/L.Control.Resizer.js"></script>

<!-- Leaflet Legend -->
<link rel="stylesheet" href="https://ptma.github.io/Leaflet.Legend/src/leaflet.legend.css">
<script src="https://ptma.github.io/Leaflet.Legend/src/leaflet.legend.js"></script>

<!-- Leaflet Export -->
<script src="<?php echo base_url(); ?>./assets/map_assets/bundle.js"></script>

<!-- Search Geocoding -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

<div class="">
    <main id="main" class="main">
        <div class="">
            <div class="col-lg-15 mx-auto">
                <div id="map"></div>

                <style>
                #map {
                    height: 705px;
                }
                </style>

                <script>
                // Icon Gardu
                var garduicon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/gardu.png',
                });

                // Icon Tiang TR
                var ttricon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/ttr.png',
                });

                var jtricon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/jtr.png',
                });

                var tmicon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/tm.png',
                });

                var tricon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/tr.png',
                });

                var appicon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/app.png',
                });

                var kappicon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/kapp.png',
                });

                var kwhicon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/kwh.png',
                });

                var mcbicon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/mcb.png',
                });

                var cticon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/ct.png',
                });

                var pticon = L.icon({
                    iconUrl: './assets/gardu_assets/icon/pt.png',
                });

                // Map
                // var map = L.map('map');
                // Create a new map with a fullscreen button:
                var map = new L.Map('map', {
                    fullscreenControl: true,
                    // OR
                    fullscreenControl: {
                        pseudoFullscreen: false // if true, fullscreen to page width and height
                    }
                }).setView([0.961883, 114.554848], 6);

                // Gardu
                var gardu;
                var ttr;
                var jtr;
                var tm;
                var tr;
                var app;
                var kapp;
                var kwh;
                var mcb;
                var ct;
                var pt;
                var up3;
                var ulp;

                gardu = L.layerGroup();
                <?php foreach ($koor as $f) { ?>
                L.marker([<?= $f->lat_gardu ?>, <?= $f->long_gardu ?>], {
                        icon: garduicon
                    }).bindPopup(
                        "<h5><?= $f->nm_gardu ?> </h5>")
                    .addTo(
                        map);
                <?php } ?>

                <?php foreach ($ttr as $f) { ?>
                var photottr = '<img src="<?= $f->foto_tiangtr ?>" alt=""/>';
                <?php } ?>

                ttr = L.layerGroup();
                <?php foreach ($ttr as $f) { ?>
                L.marker([<?= $f->lat_tiangtr ?>, <?= $f->long_tiangtr ?>], {
                        icon: ttricon
                    }).bindPopup(
                        "<h5><?= $f->nm_tiangtr ?></h5>" + "<sub><?= $f->nm_petugas ?></sub>" + "<br>" +
                        "<sub><?= $f->tgl_survey?></sub>" + "<br><br>" + photottr)
                    .addTo(
                        ttr);
                <?php } ?>

                <?php foreach ($jtr as $f) { ?>
                var photojtr = '<img src="<?= $f->foto_jtr ?>" alt=""/>';
                <?php } ?>

                jtr = L.layerGroup();
                <?php foreach ($jtr as $f) { ?>
                L.marker([<?= $f->lat_jtr ?>, <?= $f->long_jtr ?>], {
                        icon: jtricon
                    }).bindPopup(
                        "<h5><?= $f->nm_jtr ?> </h5>" + photojtr)
                    .addTo(
                        jtr);
                <?php } ?>

                <?php foreach ($tm as $f) { ?>
                var phototm = '<img src="<?= $f->foto_stl_tm ?>" alt=""/>';
                <?php } ?>

                tm = L.layerGroup();
                <?php foreach ($tm as $f) { ?>
                L.marker([<?= $f->lat_stl_tm ?>, <?= $f->long_stl_tm ?>], {
                        icon: tmicon
                    }).bindPopup(
                        "<h5><?= $f->nm_stl_tm ?> </h5>" + phototm)
                    .addTo(
                        tm);
                <?php } ?>

                <?php foreach ($tr as $f) { ?>
                var phototr = '<img src="<?= $f->foto_stl_tr ?>" alt=""/>';
                <?php } ?>

                tr = L.layerGroup();
                <?php foreach ($tr as $f) { ?>
                L.marker([<?= $f->lat_stl_tr ?>, <?= $f->long_stl_tr ?>], {
                        icon: tricon
                    }).bindPopup(
                        "<h5><?= $f->nm_stl_tr ?> </h5>" + phototr)
                    .addTo(
                        tr);
                <?php } ?>

                <?php foreach ($app as $f) { ?>
                var photoapp = '<img src="<?= $f->foto_app ?>" alt=""/>';
                <?php } ?>

                app = L.layerGroup();
                <?php foreach ($app as $f) { ?>
                L.marker([<?= $f->lat_app ?>, <?= $f->long_app ?>], {
                        icon: appicon
                    }).bindPopup(
                        "<h5><?= $f->nm_app ?> </h5>" + photoapp)
                    .addTo(
                        app);
                <?php } ?>

                <?php foreach ($kapp as $f) { ?>
                var photokapp = '<img src="<?= $f->foto_kotak_app ?>" alt=""/>';
                <?php } ?>

                kapp = L.layerGroup();
                <?php foreach ($kapp as $f) { ?>
                L.marker([<?= $f->lat_kotak_app ?>, <?= $f->long_kotak_app ?>], {
                        icon: kappicon
                    }).bindPopup(
                        "<h5><?= $f->nm_kotak_app ?> </h5>" + photokapp)
                    .addTo(
                        kapp);
                <?php } ?>

                <?php foreach ($kwh as $f) { ?>
                var photokwh = '<img src="<?= $f->foto_kwh ?>" alt=""/>';
                <?php } ?>

                kwh = L.layerGroup();
                <?php foreach ($kwh as $f) { ?>
                L.marker([<?= $f->lat_kwh ?>, <?= $f->long_kwh ?>], {
                        icon: kwhicon
                    }).bindPopup(
                        "<h5><?= $f->nm_kwh ?> </h5>" + photokwh)
                    .addTo(
                        kwh);
                <?php } ?>

                <?php foreach ($mcb as $f) { ?>
                var photomcb = '<img src="<?= $f->foto_mcb ?>" alt=""/>';
                <?php } ?>

                mcb = L.layerGroup();
                <?php foreach ($mcb as $f) { ?>
                L.marker([<?= $f->lat_mcb ?>, <?= $f->long_mcb ?>], {
                        icon: mcbicon
                    }).bindPopup(
                        "<h5><?= $f->nm_mcb ?> </h5>" + photomcb)
                    .addTo(
                        mcb);
                <?php } ?>

                <?php foreach ($ct as $f) { ?>
                var photoct = '<img src="<?= $f->foto_ct ?>" alt=""/>';
                <?php } ?>

                ct = L.layerGroup();
                <?php foreach ($ct as $f) { ?>
                L.marker([<?= $f->lat_ct ?>, <?= $f->long_ct ?>], {
                        icon: cticon
                    }).bindPopup(
                        "<h5><?= $f->nm_ct ?> </h5>" + photoct)
                    .addTo(
                        ct);
                <?php } ?>

                <?php foreach ($pt as $f) { ?>
                var photopt = '<img src="<?= $f->foto_pt ?>" alt=""/>';
                <?php } ?>

                pt = L.layerGroup();
                <?php foreach ($pt as $f) { ?>
                L.marker([<?= $f->lat_pt ?>, <?= $f->long_pt ?>], {
                        icon: pticon
                    }).bindPopup(
                        "<h5><?= $f->nm_pt ?> </h5>" + photopt)
                    .addTo(
                        pt);
                <?php } ?>

                up3 = L.layerGroup();
                <?php foreach ($up3 as $f) { ?>
                L.marker([<?= $f->lat_up3 ?>, <?= $f->long_up3 ?>]).bindPopup(
                        "<h5><?= $f->up3 ?> </h5>")
                    .addTo(
                        map);
                <?php } ?>

                ulp = L.layerGroup();
                <?php foreach ($ulp as $f) { ?>
                L.marker([<?= $f->lat_ulp ?>, <?= $f->long_ulp ?>]).bindPopup(
                        "<h5><?= $f->nm_ulp ?> </h5>")
                    .addTo(
                        map);
                <?php } ?>

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                var mbAttr =
                    'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    mbUrl =
                    'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

                var grayscale = L.tileLayer(mbUrl, {
                        id: 'mapbox/light-v9',
                        tileSize: 512,
                        zoomOffset: -1,
                        attribution: mbAttr
                    }),
                    streets = L.tileLayer(mbUrl, {
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1,
                        attribution: mbAttr
                    }),
                    osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '© OpenStreetMap'
                    });

                var baseLayers = {
                    "Streets": streets,
                    "Grayscale": grayscale,
                    "OpenStreetMap": osm
                };

                var overlayMaps = {
                    "Gardu": gardu,
                    "Tiang TR": ttr,
                    "JTR": jtr,
                    "STL TM": tm,
                    "SR/ STL TR": tr,
                    "APP": app,
                    "Kotak App": kapp,
                    "KWH": kwh,
                    "MCB": mcb,
                    "CT": ct,
                    "PT": pt,
                    "UP3": up3,
                    "ULP": ulp
                };

                L.control.layers(baseLayers, overlayMaps).addTo(map);

                L.control.resizer({
                    direction: 'se'
                }).addTo(map);

                L.control.Legend({
                    position: "bottomleft",
                    collapsed: false,
                    symbolWidth: 24,
                    opacity: 1,
                    column: 3,
                    legends: [{
                        label: "Gardu",
                        type: "image",
                        url: "./assets/gardu_assets/icon/gardu.png",
                    }, {
                        label: "Tiang TR",
                        type: "image",
                        url: "./assets/gardu_assets/icon/ttr.png",
                    }, {
                        label: "JTR",
                        type: "image",
                        url: "./assets/gardu_assets/icon/jtr.png",
                    }, {
                        label: "STL TM",
                        type: "image",
                        url: "./assets/gardu_assets/icon/tm.png",
                    }, {
                        label: "SR STL/TR",
                        type: "image",
                        url: "./assets/gardu_assets/icon/tr.png",
                    }, {
                        label: "APP",
                        type: "image",
                        url: "./assets/gardu_assets/icon/app.png",
                    }, {
                        label: "Kotak APP",
                        type: "image",
                        url: "./assets/gardu_assets/icon/kapp.png",
                    }, {
                        label: "KWH",
                        type: "image",
                        url: "./assets/gardu_assets/icon/kwh.png",
                    }, {
                        label: "MCB",
                        type: "image",
                        url: "./assets/gardu_assets/icon/mcb.png",
                    }, {
                        label: "CT",
                        type: "image",
                        url: "./assets/gardu_assets/icon/ct.png",
                    }, {
                        label: "PT",
                        type: "image",
                        url: "./assets/gardu_assets/icon/pt.png",
                    }]
                }).addTo(map);

                L.easyPrint({
                    title: 'My awesome print button',
                    position: 'bottomright',
                    sizeModes: ['A4Portrait', 'A4Landscape']
                }).addTo(map);

                L.Control.geocoder().addTo(map);

                ACCESS_TOKEN =
                    'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw';
                L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors',
                    maxZoom: 17,
                    minZoom: 9
                }).addTo(map);
                </script>
            </div>
        </div>
    </main>
</div>