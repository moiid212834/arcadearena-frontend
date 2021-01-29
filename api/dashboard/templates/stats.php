<div class="px-0 mx-0 mx-md-2 bg-dark-gray w-100">
    <ul class="nav nav-pills " id="pills-tab" role="tablist">
        <li class="nav-item w-50 text-center" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">Call of duty Warzone Stats</a>
        </li>
        <li class="nav-item w-50 text-center" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">Arcade Arena Stats</a>
        </li>

    </ul>
    <div class="tab-content p-2" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <?php include('templates/stat-card.php')?>
           <?php include('templates/stat-card-2.php')?>
           
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <?php include('templates/stat-card-2.php')?>    
        <?php include('templates/stat-card.php')?>
           
        </div>
    </div>
</div>