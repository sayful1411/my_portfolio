<section class="e z yf dg za od">
    <div class="a">
        <div class="mb hd id ca">
            <div class="bc fk/12 nl/12 df">
                <div class="sc _a dk">
                    <h1 class="dh jh yg zj oa">Portfolio Details Page</h1>
                    <p class="eh ug lh ih"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius eros eget sapien consectetur ultrices. Ut quis dapibus libero. </p>
                </div>
            </div>
            <div class="bc gk/12 ol/12 df">
                <div class="tg">
                    <ul class="mb id hk">
                        <li class="mb id">
                            <a href="{{ route('index') }}" class="eh ug lh eg ui"> Home </a>
                            <span class="kb jc wb be ce fe cd sa"></span>
                        </li>
                        <li class="eh ug mh">Portfolio Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <span class="d k g aa">
            <svg width="730" height="206" viewBox="0 0 730 206" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.08" width="136.991" height="563.705" transform="matrix(0.632736 0.774368 0.774368 -0.632736 -201.278 330.677)" fill="url(#paint0_linear_0:1)"></rect>
                <rect opacity="0.05" width="345.355" height="563.705" transform="matrix(0.632736 0.774368 0.774368 -0.632736 74 330.677)" fill="url(#paint1_linear_0:1)"></rect>
                <defs>
                    <linearGradient id="paint0_linear_0:1" x1="68.4956" y1="0" x2="68.4956" y2="563.705" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="paint1_linear_0:1" x1="172.678" y1="0" x2="172.678" y2="563.705" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </span>
        <span class="d f q aa">
            <svg width="405" height="206" viewBox="0 0 405 206" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.08" width="289.718" height="563.705" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 603.461 -125.138)" fill="url(#paint0_linear_54:595)"></rect>
                <defs>
                    <linearGradient id="paint0_linear_54:595" x1="144.859" y1="0" x2="144.859" y2="563.705" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </span>
    </div>
</section>
<section class="fg">
    <div class="a">
        <div class="mb hd ka">
            <div class="bc jl/12 pf">
                <div>
                    <div class="rd ma"> <img src="{{ asset($project->image) }}" alt="image" class="bc ze _e"> </div>
                    <h3 class="dh jh yg wj lm jb">{{ $project->name }}</h3>
                    <p class="ug xj jm hn lh ma"> {{ $project->description }}</p>
                </div>
            </div>
            <div class="bc kl/12 pf">
                <div class="ue xd je wf nf qj dm fn rd la">
                    <h3 class="dh mh ch jb">Project Info</h3>
                    <ul>
                        <li class="mb ul bn ua"> <span class="ad bc eh jh ug mb ld"> Category <span class="lh">:</span> </span>
                            <span class="bc eh lh ug qg em gn"> {{ $project->categories }} </span>
                        </li>
                        <li class="mb ul bn ua"> <span class="ad bc eh jh ug mb ld"> Date <span class="lh">:</span> </span>
                            <span class="bc eh lh ug qg em gn"> {{ $project->date }} </span>
                        </li>
                        <li class="mb ul bn ua"> <span class="ad bc eh jh ug mb ld"> Tags <span class="lh">:</span> </span>
                            <span class="bc eh lh ug qg em gn"> {{ $project->tags }} </span>
                        </li>
                        <li class="mb ul bn ua"> <span class="ad bc eh jh ug mb ld"> Website <span class="lh">:</span> </span>
                            <span class="bc eh lh ug qg em gn"> {{ $project->website }} </span>
                        </li>
                    </ul>
                </div>
                <div class="ue xd je wf nf qj dm fn rd">
                    <h3 class="dh mh ch jb">Downoad Files</h3>
                    <ul>
                        <li class="mb">
                            <button class="bc mb id eh ug kh pe kf pf rd">
                                <span class="rg">
                                    <svg width="21" height="21" viewBox="0 0 21 21" class="ye">
                                        <path d="M5.00327 2.6569C4.56125 2.65777 4.13767 2.83419 3.82572 3.14736C3.51377 3.46053 3.339 3.88479 3.33986 4.32682L3.3659 17.6601C3.36676 18.1022 3.54318 18.5257 3.85635 18.8377C4.16952 19.1496 4.59379 19.3244 5.03581 19.3235L15.0358 19.304C15.4778 19.3032 15.9014 19.1267 16.2134 18.8136C16.5253 18.5004 16.7001 18.0761 16.6992 17.6341L16.6797 7.63411L11.6699 2.64389L5.00327 2.6569ZM5.00653 4.32357L10.8398 4.31218L10.848 8.47884L15.0146 8.4707L15.0325 17.6374L5.03256 17.6569L5.00653 4.32357ZM6.68621 10.987L6.68946 12.6536L13.3561 12.6406L13.3529 10.9739L6.68621 10.987ZM6.69271 14.3203L6.69597 15.987L10.8626 15.9788L10.8594 14.3122L6.69271 14.3203Z"></path>
                                    </svg>
                                </span>
                                <span> {{ $project->download }} </span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
