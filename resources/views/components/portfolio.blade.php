<section id="portfolio" class="ig jg se">
    <div class="a">
        <div class="mb hd ca">
            <div class="bc df">
                <div class="vc fa sg gb">
                    <span class="fh _g mh kb ta"> Creative Portfolios </span>
                    <h2 class="dh jh wg wj kk oa">Recent Works</h2>
                    <p class="eh _g lh">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="portfolio-container mb kd ga">
            <div class="bc zm/12 df">
                <div class="items-wrapper mb hd kd ca">

                    @foreach ($projectsData as $item)
                        <div class="bc ek/2 df item web app">
                        <div class="_a">
                            <div class="e dj ma od wh vd">
                                <img src="{{ $item->image }}" alt="image" class="bc" />
                            </div>
                            <h3 class="mt-6"> <a href="{{ route('project.show', ['id' => $item->id]) }}" class="fh jh ui zg lb ua"> {{ $item->name }} </a> </h3>
                            <p class="eh ug lh">{{ substr($item->description, 0 ,80) }}...</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
