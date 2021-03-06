<?php $this->need('header.php'); ?>

        <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded <?php if( !empty($this->options->switch) && in_array('ShowLoadingLine',$this->options->switch) ): ?>fade out<?php endif; ?>">

            <main class="mdl-layout__content">
                <div id="top"></div>
                <!-- Sidebar hamburger button -->
                <button class="MD-burger-icon sidebar-toggle">
                  <span class="MD-burger-layer"></span>
                </button>
                <!-- Top-left-corner home button -->
                <div class="demo-back" id="backhome-div">
                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="#" onClick="javascript :history.back();" title="go back" role="button">
                        <!-- For modern browsers. -->
                        <i class="material-icons" role="presentation">arrow_back</i>
                        <!-- For IE9 or below. -->
                        <i class="material-icons">&#xE5C4;</i>
                    </a>
                </div>
                <div class="mdl-tooltip" for="backhome-div">Back</div>

                <div class="demo-blog__posts mdl-grid">

                    <?php while($this->next()): ?>

                    <!-- Article fragment -->
                    <div class="mdl-card mdl-cell mdl-cell--12-col article-module">

                        <!-- Article link & title -->
                        <?php if ( !empty($this->options->appearance) && in_array('ThumbnailOption', $this->options->appearance) ) : ?>
                            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image:url(<?php showThumbnail($this); ?>)">
                                <p class="article-headline-p"><a href="<?php $this->permalink() ?>" target="_self"><?php $this->title() ?></a></p>
                            </div>
                        <?php else: ?>
                            <div class="mdl-card__media mdl-color-text--grey-50" style="background-color:<?php $this->options->TitleColor()?>;color:#757575 !important;">
                                <p class="article-headline-p-nopic">
                                    <a href="<?php $this->permalink() ?>" target="_self">
                                        “</br><?php $this->title() ?></br>”
                                    </a>
                                </p>
                            </div>
                        <?php endif; ?>

                        <!-- Article content -->
                        <div class="mdl-color-text--grey-600 mdl-card__supporting-text index-article-content">
                            <!--  $this->content('Continue Reading...');  -->
                            <?php $this->excerpt(80, '...'); ?>
                            &nbsp;&nbsp;&nbsp;<span><a href="<?php $this->permalink(); ?>" target="_self">Continue Reading</a></span>
                        </div>

                        <!-- Articli info-->
                        <div>
                            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600 " id="article-author-date">
                                <!-- Author avatar -->
                                <div id="author-avatar"><?php $this->author->gravatar(44); ?></div>
                                <div>
                                    <span class="author-name-span"><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>
                                    <span><?php $this->date('F j, Y'); ?></span>
                                </div>
                            </div>
                            <div id="article-category-comment">
                                <?php $this->category(','); ?> | <a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a>
                            </div>
                        </div>

                    </div>

                    <?php endwhile; ?>

                    <nav class="demo-nav mdl-cell mdl-cell--12-col">
                        <?php $this->pageLink('
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <!-- For modern browsers. -->
                            <i class="material-icons" role="presentation">arrow_back</i>
                            <!-- For IE9 or below. -->
                            <i class="material-icons">&#xE5C4;</i>
                        </button>
                        '); ?>
                        <div class="section-spacer"></div>
                        page <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?>
                        of <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?>
                        <div class="section-spacer"></div>
                        <?php $this->pageLink('
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                            <!-- For modern browsers. -->
                            <i class="material-icons" role="presentation">arrow_forward</i>
                            <!-- For IE9 or below. -->
                            <i class="material-icons">&#xE5C8;</i>
                        </button>
                        ','next'); ?>
                    </nav>

                </div>

                <?php include('sidebar.php'); ?>
                <?php include('footer.php'); ?>
