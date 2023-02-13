<div class="reco_box">
    <div class="modal fade show" id="IET11" role="dialog" style="display: none; padding-right: 17px;z-index: 9999999;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h3>Addmission Online / Offline </h3>
                </div>
                <?php $admissions = DB::table('pages')
                    ->where('page_type', 'admission')
                    ->get(); ?>
                <div class="modal-body text">
                    <div class="row">

                        @foreach ($admissions as $admission)
                            <div class="col-md-6">
                                <h4 class="text-capitalize" >Steps for {{ $admission->sub_title }} </h4>
                                <ul class="bullet_list pt-2 pl-5 pr-5">
                                    <li class="pb-3 text-justify border-right"><?php echo  $admission->description ?></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

