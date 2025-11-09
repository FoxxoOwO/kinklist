<?php

echo '




<form action="save.php" method="POST">
            <fieldset class="form-section">
                <legend>Info</legend>
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="basic_info[nickname]">
                </div>
                
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="basic_info[age]" min="18">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="basic_info[gender]">
                        <option value="" selected>Not specified</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="non-binary">Non-binary</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Genitals</label>
                    
                    <div class="radio-group-horizontal">
                        
                        <div class="radio-item">
                            <input type="radio" id="genitals_penis" name="basic_info[genitals]" value="penis">
                            <label for="genitals_penis">Penis</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="genitals_vagina" name="basic_info[genitals]" value="vagina">
                            <label for="genitals_vagina">Vagina</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="genitals_both" name="basic_info[genitals]" value="both">
                            <label for="genitals_both">Both</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="genitals_unspecified" name="basic_info[genitals]" value="" checked>
                            <label for="genitals_unspecified">Not specified</label>
                        </div>

                    </div>
                </div>
                
                <div class="form-group">
                        <label for="boob_size">Boob size</label>
                        <select id="boob_size" name="basic_info[boob_size]">
                            <option value="none" selected>None</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                            <option value="dd">DD</option>
                            <option value="other">Other</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="orientation">Orientation</label>
                    <select id="orientation" name="basic_info[orientation]">
                        <option value="" selected>Not specified</option>
                        <option value="female">Heterosexual</option>
                        <option value="male">Homosexual</option>
                        <option value="non-binary">Bisexual</option>
                    </select>
                </div>

                
                <div class="form-group">
                    <label for="body_count">Body count</label>
                    <select id="body_count" name="basic_info[body_count]">
                        <option value="none" selected>Not specified</option>
                        <option value="0">0</option>
                        <option value="1-5">1–5</option>
                        <option value="6-10">6–10</option>
                        <option value="11-20">11–20</option>
                        <option value="21-50">21–50</option>
                        <option value="50+">50+</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea id="notes" name="basic_info[notes]" placeholder="Do you want to specify something or is something missing? Write it here!"></textarea>
                </div>
            </fieldset>        

            








            <fieldset class="form-section">
                <legend>Preference</legend>

                <div class="table-wrapper">
                    <h2>Body</h2>
                    <table class="preference-table">    
                        <tbody>
                            <!-- Generated preference rows -->
                            <tr>
                                <td><div class="label-cell">Feminine</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[feminine][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="feminine_fav" name="preferences[feminine][rating]" value="favorite">
                                        <label for="feminine_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="feminine_like" name="preferences[feminine][rating]" value="like">
                                        <label for="feminine_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="feminine_ind" name="preferences[feminine][rating]" value="indifferent">
                                        <label for="feminine_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="feminine_maybe" name="preferences[feminine][rating]" value="maybe">
                                        <label for="feminine_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="feminine_limit" name="preferences[feminine][rating]" value="limit">
                                        <label for="feminine_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="feminine_none" name="preferences[feminine][rating]" value="not_entered" checked>
                                        <label for="feminine_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            

                            

                            <tr>
                                <td><div class="label-cell">Skinny</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[skinny][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="skinny_fav" name="preferences[skinny][rating]" value="favorite">
                                        <label for="skinny_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="skinny_like" name="preferences[skinny][rating]" value="like">
                                        <label for="skinny_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="skinny_ind" name="preferences[skinny][rating]" value="indifferent">
                                        <label for="skinny_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="skinny_maybe" name="preferences[skinny][rating]" value="maybe">
                                        <label for="skinny_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="skinny_limit" name="preferences[skinny][rating]" value="limit">
                                        <label for="skinny_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="skinny_none" name="preferences[skinny][rating]" value="not_entered" checked>
                                        <label for="skinny_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Fit</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[fit][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="fit_fav" name="preferences[fit][rating]" value="favorite">
                                        <label for="fit_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="fit_like" name="preferences[fit][rating]" value="like">
                                        <label for="fit_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="fit_ind" name="preferences[fit][rating]" value="indifferent">
                                        <label for="fit_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="fit_maybe" name="preferences[fit][rating]" value="maybe">
                                        <label for="fit_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="fit_limit" name="preferences[fit][rating]" value="limit">
                                        <label for="fit_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="fit_none" name="preferences[fit][rating]" value="not_entered" checked>
                                        <label for="fit_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Chubby</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[chubby][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="chubby_fav" name="preferences[chubby][rating]" value="favorite">
                                        <label for="chubby_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="chubby_like" name="preferences[chubby][rating]" value="like">
                                        <label for="chubby_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="chubby_ind" name="preferences[chubby][rating]" value="indifferent">
                                        <label for="chubby_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="chubby_maybe" name="preferences[chubby][rating]" value="maybe">
                                        <label for="chubby_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="chubby_limit" name="preferences[chubby][rating]" value="limit">
                                        <label for="chubby_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="chubby_none" name="preferences[chubby][rating]" value="not_entered" checked>
                                        <label for="chubby_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Obese</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[obese][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="obese_fav" name="preferences[obese][rating]" value="favorite">
                                        <label for="obese_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="obese_like" name="preferences[obese][rating]" value="like">
                                        <label for="obese_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="obese_ind" name="preferences[obese][rating]" value="indifferent">
                                        <label for="obese_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="obese_maybe" name="preferences[obese][rating]" value="maybe">
                                        <label for="obese_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="obese_limit" name="preferences[obese][rating]" value="limit">
                                        <label for="obese_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="obese_none" name="preferences[obese][rating]" value="not_entered" checked>
                                        <label for="obese_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Muscular</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[muscular][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="muscular_fav" name="preferences[muscular][rating]" value="favorite">
                                        <label for="muscular_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="muscular_like" name="preferences[muscular][rating]" value="like">
                                        <label for="muscular_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="muscular_ind" name="preferences[muscular][rating]" value="indifferent">
                                        <label for="muscular_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="muscular_maybe" name="preferences[muscular][rating]" value="maybe">
                                        <label for="muscular_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="muscular_limit" name="preferences[muscular][rating]" value="limit">
                                        <label for="muscular_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="muscular_none" name="preferences[muscular][rating]" value="not_entered" checked>
                                        <label for="muscular_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Small Breasts</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[small_breasts][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="small_breasts_fav" name="preferences[small_breasts][rating]" value="favorite">
                                        <label for="small_breasts_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="small_breasts_like" name="preferences[small_breasts][rating]" value="like">
                                        <label for="small_breasts_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="small_breasts_ind" name="preferences[small_breasts][rating]" value="indifferent">
                                        <label for="small_breasts_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="small_breasts_maybe" name="preferences[small_breasts][rating]" value="maybe">
                                        <label for="small_breasts_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="small_breasts_limit" name="preferences[small_breasts][rating]" value="limit">
                                        <label for="small_breasts_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="small_breasts_none" name="preferences[small_breasts][rating]" value="not_entered" checked>
                                        <label for="small_breasts_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Large Breasts</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[large_breasts][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="large_breasts_fav" name="preferences[large_breasts][rating]" value="favorite">
                                        <label for="large_breasts_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="large_breasts_like" name="preferences[large_breasts][rating]" value="like">
                                        <label for="large_breasts_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="large_breasts_ind" name="preferences[large_breasts][rating]" value="indifferent">
                                        <label for="large_breasts_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="large_breasts_maybe" name="preferences[large_breasts][rating]" value="maybe">
                                        <label for="large_breasts_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="large_breasts_limit" name="preferences[large_breasts][rating]" value="limit">
                                        <label for="large_breasts_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="large_breasts_none" name="preferences[large_breasts][rating]" value="not_entered" checked>
                                        <label for="large_breasts_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Small Cocks</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[small_cocks][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="small_cocks_fav" name="preferences[small_cocks][rating]" value="favorite">
                                        <label for="small_cocks_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="small_cocks_like" name="preferences[small_cocks][rating]" value="like">
                                        <label for="small_cocks_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="small_cocks_ind" name="preferences[small_cocks][rating]" value="indifferent">
                                        <label for="small_cocks_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="small_cocks_maybe" name="preferences[small_cocks][rating]" value="maybe">
                                        <label for="small_cocks_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="small_cocks_limit" name="preferences[small_cocks][rating]" value="limit">
                                        <label for="small_cocks_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="small_cocks_none" name="preferences[small_cocks][rating]" value="not_entered" checked>
                                        <label for="small_cocks_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Large Cocks</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[large_cocks][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="large_cocks_fav" name="preferences[large_cocks][rating]" value="favorite">
                                        <label for="large_cocks_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="large_cocks_like" name="preferences[large_cocks][rating]" value="like">
                                        <label for="large_cocks_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="large_cocks_ind" name="preferences[large_cocks][rating]" value="indifferent">
                                        <label for="large_cocks_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="large_cocks_maybe" name="preferences[large_cocks][rating]" value="maybe">
                                        <label for="large_cocks_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="large_cocks_limit" name="preferences[large_cocks][rating]" value="limit">
                                        <label for="large_cocks_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="large_cocks_none" name="preferences[large_cocks][rating]" value="not_entered" checked>
                                        <label for="large_cocks_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Body hair</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[body_hair][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="body_hair_fav" name="preferences[body_hair][rating]" value="favorite">
                                        <label for="body_hair_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="body_hair_like" name="preferences[body_hair][rating]" value="like">
                                        <label for="body_hair_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="body_hair_ind" name="preferences[body_hair][rating]" value="indifferent">
                                        <label for="body_hair_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="body_hair_maybe" name="preferences[body_hair][rating]" value="maybe">
                                        <label for="body_hair_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="body_hair_limit" name="preferences[body_hair][rating]" value="limit">
                                        <label for="body_hair_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="body_hair_none" name="preferences[body_hair][rating]" value="not_entered" checked>
                                        <label for="body_hair_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Shaved body</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[shaved_body][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="shaved_body_fav" name="preferences[shaved_body][rating]" value="favorite">
                                        <label for="shaved_body_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="shaved_body_like" name="preferences[shaved_body][rating]" value="like">
                                        <label for="shaved_body_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="shaved_body_ind" name="preferences[shaved_body][rating]" value="indifferent">
                                        <label for="shaved_body_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="shaved_body_maybe" name="preferences[shaved_body][rating]" value="maybe">
                                        <label for="shaved_body_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="shaved_body_limit" name="preferences[shaved_body][rating]" value="limit">
                                        <label for="shaved_body_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="shaved_body_none" name="preferences[shaved_body][rating]" value="not_entered" checked>
                                        <label for="shaved_body_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Tall</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[tall][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="tall_fav" name="preferences[tall][rating]" value="favorite">
                                        <label for="tall_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="tall_like" name="preferences[tall][rating]" value="like">
                                        <label for="tall_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="tall_ind" name="preferences[tall][rating]" value="indifferent">
                                        <label for="tall_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="tall_maybe" name="preferences[tall][rating]" value="maybe">
                                        <label for="tall_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="tall_limit" name="preferences[tall][rating]" value="limit">
                                        <label for="tall_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="tall_none" name="preferences[tall][rating]" value="not_entered" checked>
                                        <label for="tall_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Short</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[short][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="short_fav" name="preferences[short][rating]" value="favorite">
                                        <label for="short_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="short_like" name="preferences[short][rating]" value="like">
                                        <label for="short_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="short_ind" name="preferences[short][rating]" value="indifferent">
                                        <label for="short_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="short_maybe" name="preferences[short][rating]" value="maybe">
                                        <label for="short_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="short_limit" name="preferences[short][rating]" value="limit">
                                        <label for="short_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="short_none" name="preferences[short][rating]" value="not_entered" checked>
                                        <label for="short_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Tattoos</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[tattoos][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="tattoos_fav" name="preferences[tattoos][rating]" value="favorite">
                                        <label for="tattoos_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="tattoos_like" name="preferences[tattoos][rating]" value="like">
                                        <label for="tattoos_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="tattoos_ind" name="preferences[tattoos][rating]" value="indifferent">
                                        <label for="tattoos_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="tattoos_maybe" name="preferences[tattoos][rating]" value="maybe">
                                        <label for="tattoos_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="tattoos_limit" name="preferences[tattoos][rating]" value="limit">
                                        <label for="tattoos_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="tattoos_none" name="preferences[tattoos][rating]" value="not_entered" checked>
                                        <label for="tattoos_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Piercing</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[piercing][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="piercing_fav" name="preferences[piercing][rating]" value="favorite">
                                        <label for="piercing_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="piercing_like" name="preferences[piercing][rating]" value="like">
                                        <label for="piercing_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="piercing_ind" name="preferences[piercing][rating]" value="indifferent">
                                        <label for="piercing_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="piercing_maybe" name="preferences[piercing][rating]" value="maybe">
                                        <label for="piercing_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="piercing_limit" name="preferences[piercing][rating]" value="limit">
                                        <label for="piercing_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="piercing_none" name="preferences[piercing][rating]" value="not_entered" checked>
                                        <label for="piercing_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Bald</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[bald][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="bald_fav" name="preferences[bald][rating]" value="favorite">
                                        <label for="bald_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="bald_like" name="preferences[bald][rating]" value="like">
                                        <label for="bald_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="bald_ind" name="preferences[bald][rating]" value="indifferent">
                                        <label for="bald_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="bald_maybe" name="preferences[bald][rating]" value="maybe">
                                        <label for="bald_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="bald_limit" name="preferences[bald][rating]" value="limit">
                                        <label for="bald_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="bald_none" name="preferences[bald][rating]" value="not_entered" checked>
                                        <label for="bald_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Short Hair</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[short_hair][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="short_hair_fav" name="preferences[short_hair][rating]" value="favorite">
                                        <label for="short_hair_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="short_hair_like" name="preferences[short_hair][rating]" value="like">
                                        <label for="short_hair_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="short_hair_ind" name="preferences[short_hair][rating]" value="indifferent">
                                        <label for="short_hair_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="short_hair_maybe" name="preferences[short_hair][rating]" value="maybe">
                                        <label for="short_hair_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="short_hair_limit" name="preferences[short_hair][rating]" value="limit">
                                        <label for="short_hair_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="short_hair_none" name="preferences[short_hair][rating]" value="not_entered" checked>
                                        <label for="short_hair_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Long Hair</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[long_hair][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="long_hair_fav" name="preferences[long_hair][rating]" value="favorite">
                                        <label for="long_hair_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="long_hair_like" name="preferences[long_hair][rating]" value="like">
                                        <label for="long_hair_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="long_hair_ind" name="preferences[long_hair][rating]" value="indifferent">
                                        <label for="long_hair_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="long_hair_maybe" name="preferences[long_hair][rating]" value="maybe">
                                        <label for="long_hair_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="long_hair_limit" name="preferences[long_hair][rating]" value="limit">
                                        <label for="long_hair_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="long_hair_none" name="preferences[long_hair][rating]" value="not_entered" checked>
                                        <label for="long_hair_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Glasses</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[glasses][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="glasses_fav" name="preferences[glasses][rating]" value="favorite">
                                        <label for="glasses_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="glasses_like" name="preferences[glasses][rating]" value="like">
                                        <label for="glasses_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="glasses_ind" name="preferences[glasses][rating]" value="indifferent">
                                        <label for="glasses_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="glasses_maybe" name="preferences[glasses][rating]" value="maybe">
                                        <label for="glasses_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="glasses_limit" name="preferences[glasses][rating]" value="limit">
                                        <label for="glasses_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="glasses_none" name="preferences[glasses][rating]" value="not_entered" checked>
                                        <label for="glasses_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Redhead</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[redhead][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="redhead_fav" name="preferences[redhead][rating]" value="favorite">
                                        <label for="redhead_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="redhead_like" name="preferences[redhead][rating]" value="like">
                                        <label for="redhead_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="redhead_ind" name="preferences[redhead][rating]" value="indifferent">
                                        <label for="redhead_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="redhead_maybe" name="preferences[redhead][rating]" value="maybe">
                                        <label for="redhead_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="redhead_limit" name="preferences[redhead][rating]" value="limit">
                                        <label for="redhead_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="redhead_none" name="preferences[redhead][rating]" value="not_entered" checked>
                                        <label for="redhead_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Blonde</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[blonde][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="blonde_fav" name="preferences[blonde][rating]" value="favorite">
                                        <label for="blonde_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="blonde_like" name="preferences[blonde][rating]" value="like">
                                        <label for="blonde_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="blonde_ind" name="preferences[blonde][rating]" value="indifferent">
                                        <label for="blonde_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="blonde_maybe" name="preferences[blonde][rating]" value="maybe">
                                        <label for="blonde_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="blonde_limit" name="preferences[blonde][rating]" value="limit">
                                        <label for="blonde_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="blonde_none" name="preferences[blonde][rating]" value="not_entered" checked>
                                        <label for="blonde_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Brunette</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[brunette][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="brunette_fav" name="preferences[brunette][rating]" value="favorite">
                                        <label for="brunette_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="brunette_like" name="preferences[brunette][rating]" value="like">
                                        <label for="brunette_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="brunette_ind" name="preferences[brunette][rating]" value="indifferent">
                                        <label for="brunette_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="brunette_maybe" name="preferences[brunette][rating]" value="maybe">
                                        <label for="brunette_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="brunette_limit" name="preferences[brunette][rating]" value="limit">
                                        <label for="brunette_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="brunette_none" name="preferences[brunette][rating]" value="not_entered" checked>
                                        <label for="brunette_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Black Hair</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[black_hair][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="black_hair_fav" name="preferences[black_hair][rating]" value="favorite">
                                        <label for="black_hair_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="black_hair_like" name="preferences[black_hair][rating]" value="like">
                                        <label for="black_hair_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="black_hair_ind" name="preferences[black_hair][rating]" value="indifferent">
                                        <label for="black_hair_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="black_hair_maybe" name="preferences[black_hair][rating]" value="maybe">
                                        <label for="black_hair_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="black_hair_limit" name="preferences[black_hair][rating]" value="limit">
                                        <label for="black_hair_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="black_hair_none" name="preferences[black_hair][rating]" value="not_entered" checked>
                                        <label for="black_hair_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Dyed Hair</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[dyed_hair][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="dyed_hair_fav" name="preferences[dyed_hair][rating]" value="favorite">
                                        <label for="dyed_hair_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="dyed_hair_like" name="preferences[dyed_hair][rating]" value="like">
                                        <label for="dyed_hair_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="dyed_hair_ind" name="preferences[dyed_hair][rating]" value="indifferent">
                                        <label for="dyed_hair_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="dyed_hair_maybe" name="preferences[dyed_hair][rating]" value="maybe">
                                        <label for="dyed_hair_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="dyed_hair_limit" name="preferences[dyed_hair][rating]" value="limit">
                                        <label for="dyed_hair_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="dyed_hair_none" name="preferences[dyed_hair][rating]" value="not_entered" checked>
                                        <label for="dyed_hair_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Beard</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[beard][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="beard_fav" name="preferences[beard][rating]" value="favorite">
                                        <label for="beard_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="beard_like" name="preferences[beard][rating]" value="like">
                                        <label for="beard_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="beard_ind" name="preferences[beard][rating]" value="indifferent">
                                        <label for="beard_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="beard_maybe" name="preferences[beard][rating]" value="maybe">
                                        <label for="beard_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="beard_limit" name="preferences[beard][rating]" value="limit">
                                        <label for="beard_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="beard_none" name="preferences[beard][rating]" value="not_entered" checked>
                                        <label for="beard_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

























                <div class="table-wrapper">
                    <h2>Clothing</h2>
                    <table class="preference-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>On me</th>
                                <th>On partner</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Clothing preference rows (Tried checkbox + rating radios) -->
                            <tr>
                                <td><div class="label-cell">Clothed Sex</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[clothed_sex][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="clothed_sex_fav" name="preferences[clothed_sex][me][rating]" value="favorite">
                                        <label for="clothed_sex_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="clothed_sex_like" name="preferences[clothed_sex][me][rating]" value="like">
                                        <label for="clothed_sex_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="clothed_sex_ind" name="preferences[clothed_sex][me][rating]" value="indifferent">
                                        <label for="clothed_sex_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="clothed_sex_maybe" name="preferences[clothed_sex][me][rating]" value="maybe">
                                        <label for="clothed_sex_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="clothed_sex_limit" name="preferences[clothed_sex][me][rating]" value="limit">
                                        <label for="clothed_sex_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="clothed_sex_none" name="preferences[clothed_sex][me][rating]" value="not_entered" checked>
                                        <label for="clothed_sex_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[clothed_sex][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="clothed_sex_partner_fav" name="preferences[clothed_sex][partner][rating]" value="favorite">
                                        <label for="clothed_sex_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="clothed_sex_partner_like" name="preferences[clothed_sex][partner][rating]" value="like">
                                        <label for="clothed_sex_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="clothed_sex_partner_ind" name="preferences[clothed_sex][partner][rating]" value="indifferent">
                                        <label for="clothed_sex_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="clothed_sex_partner_maybe" name="preferences[clothed_sex][partner][rating]" value="maybe">
                                        <label for="clothed_sex_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="clothed_sex_partner_limit" name="preferences[clothed_sex][partner][rating]" value="limit">
                                        <label for="clothed_sex_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="clothed_sex_partner_none" name="preferences[clothed_sex][partner][rating]" value="not_entered" checked>
                                        <label for="clothed_sex_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Lingerie</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[lingerie][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="lingerie_fav" name="preferences[lingerie][me][rating]" value="favorite">
                                        <label for="lingerie_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="lingerie_like" name="preferences[lingerie][me][rating]" value="like">
                                        <label for="lingerie_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="lingerie_ind" name="preferences[lingerie][me][rating]" value="indifferent">
                                        <label for="lingerie_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="lingerie_maybe" name="preferences[lingerie][me][rating]" value="maybe">
                                        <label for="lingerie_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="lingerie_limit" name="preferences[lingerie][me][rating]" value="limit">
                                        <label for="lingerie_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="lingerie_none" name="preferences[lingerie][me][rating]" value="not_entered" checked>
                                        <label for="lingerie_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[lingerie][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="lingerie_partner_fav" name="preferences[lingerie][partner][rating]" value="favorite">
                                        <label for="lingerie_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="lingerie_partner_like" name="preferences[lingerie][partner][rating]" value="like">
                                        <label for="lingerie_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="lingerie_partner_ind" name="preferences[lingerie][partner][rating]" value="indifferent">
                                        <label for="lingerie_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="lingerie_partner_maybe" name="preferences[lingerie][partner][rating]" value="maybe">
                                        <label for="lingerie_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="lingerie_partner_limit" name="preferences[lingerie][partner][rating]" value="limit">
                                        <label for="lingerie_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="lingerie_partner_none" name="preferences[lingerie][partner][rating]" value="not_entered" checked>
                                        <label for="lingerie_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Stockings and/or Garterbelt</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[stockings_garterbelt][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="stockings_garterbelt_fav" name="preferences[stockings_garterbelt][me][rating]" value="favorite">
                                        <label for="stockings_garterbelt_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="stockings_garterbelt_like" name="preferences[stockings_garterbelt][me][rating]" value="like">
                                        <label for="stockings_garterbelt_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="stockings_garterbelt_ind" name="preferences[stockings_garterbelt][me][rating]" value="indifferent">
                                        <label for="stockings_garterbelt_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="stockings_garterbelt_maybe" name="preferences[stockings_garterbelt][me][rating]" value="maybe">
                                        <label for="stockings_garterbelt_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="stockings_garterbelt_limit" name="preferences[stockings_garterbelt][me][rating]" value="limit">
                                        <label for="stockings_garterbelt_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="stockings_garterbelt_none" name="preferences[stockings_garterbelt][me][rating]" value="not_entered" checked>
                                        <label for="stockings_garterbelt_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[stockings_garterbelt][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="stockings_garterbelt_partner_fav" name="preferences[stockings_garterbelt][partner][rating]" value="favorite">
                                        <label for="stockings_garterbelt_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="stockings_garterbelt_partner_like" name="preferences[stockings_garterbelt][partner][rating]" value="like">
                                        <label for="stockings_garterbelt_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="stockings_garterbelt_partner_ind" name="preferences[stockings_garterbelt][partner][rating]" value="indifferent">
                                        <label for="stockings_garterbelt_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="stockings_garterbelt_partner_maybe" name="preferences[stockings_garterbelt][partner][rating]" value="maybe">
                                        <label for="stockings_garterbelt_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="stockings_garterbelt_partner_limit" name="preferences[stockings_garterbelt][partner][rating]" value="limit">
                                        <label for="stockings_garterbelt_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="stockings_garterbelt_partner_none" name="preferences[stockings_garterbelt][partner][rating]" value="not_entered" checked>
                                        <label for="stockings_garterbelt_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Kneesocks</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[kneesocks][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="kneesocks_fav" name="preferences[kneesocks][me][rating]" value="favorite">
                                        <label for="kneesocks_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="kneesocks_like" name="preferences[kneesocks][me][rating]" value="like">
                                        <label for="kneesocks_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="kneesocks_ind" name="preferences[kneesocks][me][rating]" value="indifferent">
                                        <label for="kneesocks_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="kneesocks_maybe" name="preferences[kneesocks][me][rating]" value="maybe">
                                        <label for="kneesocks_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="kneesocks_limit" name="preferences[kneesocks][me][rating]" value="limit">
                                        <label for="kneesocks_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="kneesocks_none" name="preferences[kneesocks][me][rating]" value="not_entered" checked>
                                        <label for="kneesocks_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[kneesocks][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="kneesocks_partner_fav" name="preferences[kneesocks][partner][rating]" value="favorite">
                                        <label for="kneesocks_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="kneesocks_partner_like" name="preferences[kneesocks][partner][rating]" value="like">
                                        <label for="kneesocks_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="kneesocks_partner_ind" name="preferences[kneesocks][partner][rating]" value="indifferent">
                                        <label for="kneesocks_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="kneesocks_partner_maybe" name="preferences[kneesocks][partner][rating]" value="maybe">
                                        <label for="kneesocks_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="kneesocks_partner_limit" name="preferences[kneesocks][partner][rating]" value="limit">
                                        <label for="kneesocks_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="kneesocks_partner_none" name="preferences[kneesocks][partner][rating]" value="not_entered" checked>
                                        <label for="kneesocks_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Fishnets</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[fishnets][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="fishnets_fav" name="preferences[fishnets][me][rating]" value="favorite">
                                        <label for="fishnets_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="fishnets_like" name="preferences[fishnets][me][rating]" value="like">
                                        <label for="fishnets_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="fishnets_ind" name="preferences[fishnets][me][rating]" value="indifferent">
                                        <label for="fishnets_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="fishnets_maybe" name="preferences[fishnets][me][rating]" value="maybe">
                                        <label for="fishnets_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="fishnets_limit" name="preferences[fishnets][me][rating]" value="limit">
                                        <label for="fishnets_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="fishnets_none" name="preferences[fishnets][me][rating]" value="not_entered" checked>
                                        <label for="fishnets_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[fishnets][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="fishnets_partner_fav" name="preferences[fishnets][partner][rating]" value="favorite">
                                        <label for="fishnets_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="fishnets_partner_like" name="preferences[fishnets][partner][rating]" value="like">
                                        <label for="fishnets_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="fishnets_partner_ind" name="preferences[fishnets][partner][rating]" value="indifferent">
                                        <label for="fishnets_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="fishnets_partner_maybe" name="preferences[fishnets][partner][rating]" value="maybe">
                                        <label for="fishnets_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="fishnets_partner_limit" name="preferences[fishnets][partner][rating]" value="limit">
                                        <label for="fishnets_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="fishnets_partner_none" name="preferences[fishnets][partner][rating]" value="not_entered" checked>
                                        <label for="fishnets_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Heels</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[heels][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="heels_fav" name="preferences[heels][me][rating]" value="favorite">
                                        <label for="heels_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="heels_like" name="preferences[heels][me][rating]" value="like">
                                        <label for="heels_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="heels_ind" name="preferences[heels][me][rating]" value="indifferent">
                                        <label for="heels_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="heels_maybe" name="preferences[heels][me][rating]" value="maybe">
                                        <label for="heels_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="heels_limit" name="preferences[heels][me][rating]" value="limit">
                                        <label for="heels_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="heels_none" name="preferences[heels][me][rating]" value="not_entered" checked>
                                        <label for="heels_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[heels][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="heels_partner_fav" name="preferences[heels][partner][rating]" value="favorite">
                                        <label for="heels_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="heels_partner_like" name="preferences[heels][partner][rating]" value="like">
                                        <label for="heels_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="heels_partner_ind" name="preferences[heels][partner][rating]" value="indifferent">
                                        <label for="heels_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="heels_partner_maybe" name="preferences[heels][partner][rating]" value="maybe">
                                        <label for="heels_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="heels_partner_limit" name="preferences[heels][partner][rating]" value="limit">
                                        <label for="heels_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="heels_partner_none" name="preferences[heels][partner][rating]" value="not_entered" checked>
                                        <label for="heels_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Knee-high boots</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[knee_high_boots][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="knee_high_boots_fav" name="preferences[knee_high_boots][me][rating]" value="favorite">
                                        <label for="knee_high_boots_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="knee_high_boots_like" name="preferences[knee_high_boots][me][rating]" value="like">
                                        <label for="knee_high_boots_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="knee_high_boots_ind" name="preferences[knee_high_boots][me][rating]" value="indifferent">
                                        <label for="knee_high_boots_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="knee_high_boots_maybe" name="preferences[knee_high_boots][me][rating]" value="maybe">
                                        <label for="knee_high_boots_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="knee_high_boots_limit" name="preferences[knee_high_boots][me][rating]" value="limit">
                                        <label for="knee_high_boots_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="knee_high_boots_none" name="preferences[knee_high_boots][me][rating]" value="not_entered" checked>
                                        <label for="knee_high_boots_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[knee_high_boots][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="knee_high_boots_partner_fav" name="preferences[knee_high_boots][partner][rating]" value="favorite">
                                        <label for="knee_high_boots_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="knee_high_boots_partner_like" name="preferences[knee_high_boots][partner][rating]" value="like">
                                        <label for="knee_high_boots_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="knee_high_boots_partner_ind" name="preferences[knee_high_boots][partner][rating]" value="indifferent">
                                        <label for="knee_high_boots_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="knee_high_boots_partner_maybe" name="preferences[knee_high_boots][partner][rating]" value="maybe">
                                        <label for="knee_high_boots_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="knee_high_boots_partner_limit" name="preferences[knee_high_boots][partner][rating]" value="limit">
                                        <label for="knee_high_boots_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="knee_high_boots_partner_none" name="preferences[knee_high_boots][partner][rating]" value="not_entered" checked>
                                        <label for="knee_high_boots_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Corset</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[corset][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="corset_fav" name="preferences[corset][me][rating]" value="favorite">
                                        <label for="corset_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="corset_like" name="preferences[corset][me][rating]" value="like">
                                        <label for="corset_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="corset_ind" name="preferences[corset][me][rating]" value="indifferent">
                                        <label for="corset_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="corset_maybe" name="preferences[corset][me][rating]" value="maybe">
                                        <label for="corset_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="corset_limit" name="preferences[corset][me][rating]" value="limit">
                                        <label for="corset_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="corset_none" name="preferences[corset][me][rating]" value="not_entered" checked>
                                        <label for="corset_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[corset][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="corset_partner_fav" name="preferences[corset][partner][rating]" value="favorite">
                                        <label for="corset_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="corset_partner_like" name="preferences[corset][partner][rating]" value="like">
                                        <label for="corset_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="corset_partner_ind" name="preferences[corset][partner][rating]" value="indifferent">
                                        <label for="corset_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="corset_partner_maybe" name="preferences[corset][partner][rating]" value="maybe">
                                        <label for="corset_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="corset_partner_limit" name="preferences[corset][partner][rating]" value="limit">
                                        <label for="corset_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="corset_partner_none" name="preferences[corset][partner][rating]" value="not_entered" checked>
                                        <label for="corset_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Gloves</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[gloves][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="gloves_fav" name="preferences[gloves][me][rating]" value="favorite">
                                        <label for="gloves_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="gloves_like" name="preferences[gloves][me][rating]" value="like">
                                        <label for="gloves_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="gloves_ind" name="preferences[gloves][me][rating]" value="indifferent">
                                        <label for="gloves_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="gloves_maybe" name="preferences[gloves][me][rating]" value="maybe">
                                        <label for="gloves_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="gloves_limit" name="preferences[gloves][me][rating]" value="limit">
                                        <label for="gloves_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="gloves_none" name="preferences[gloves][me][rating]" value="not_entered" checked>
                                        <label for="gloves_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[gloves][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="gloves_partner_fav" name="preferences[gloves][partner][rating]" value="favorite">
                                        <label for="gloves_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="gloves_partner_like" name="preferences[gloves][partner][rating]" value="like">
                                        <label for="gloves_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="gloves_partner_ind" name="preferences[gloves][partner][rating]" value="indifferent">
                                        <label for="gloves_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="gloves_partner_maybe" name="preferences[gloves][partner][rating]" value="maybe">
                                        <label for="gloves_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="gloves_partner_limit" name="preferences[gloves][partner][rating]" value="limit">
                                        <label for="gloves_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="gloves_partner_none" name="preferences[gloves][partner][rating]" value="not_entered" checked>
                                        <label for="gloves_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Harness</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[harness][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="harness_fav" name="preferences[harness][me][rating]" value="favorite">
                                        <label for="harness_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="harness_like" name="preferences[harness][me][rating]" value="like">
                                        <label for="harness_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="harness_ind" name="preferences[harness][me][rating]" value="indifferent">
                                        <label for="harness_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="harness_maybe" name="preferences[harness][me][rating]" value="maybe">
                                        <label for="harness_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="harness_limit" name="preferences[harness][me][rating]" value="limit">
                                        <label for="harness_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="harness_none" name="preferences[harness][me][rating]" value="not_entered" checked>
                                        <label for="harness_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[harness][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="harness_partner_fav" name="preferences[harness][partner][rating]" value="favorite">
                                        <label for="harness_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="harness_partner_like" name="preferences[harness][partner][rating]" value="like">
                                        <label for="harness_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="harness_partner_ind" name="preferences[harness][partner][rating]" value="indifferent">
                                        <label for="harness_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="harness_partner_maybe" name="preferences[harness][partner][rating]" value="maybe">
                                        <label for="harness_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="harness_partner_limit" name="preferences[harness][partner][rating]" value="limit">
                                        <label for="harness_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="harness_partner_none" name="preferences[harness][partner][rating]" value="not_entered" checked>
                                        <label for="harness_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Gas Masks</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[gas_masks][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="gas_masks_fav" name="preferences[gas_masks][me][rating]" value="favorite">
                                        <label for="gas_masks_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="gas_masks_like" name="preferences[gas_masks][me][rating]" value="like">
                                        <label for="gas_masks_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="gas_masks_ind" name="preferences[gas_masks][me][rating]" value="indifferent">
                                        <label for="gas_masks_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="gas_masks_maybe" name="preferences[gas_masks][me][rating]" value="maybe">
                                        <label for="gas_masks_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="gas_masks_limit" name="preferences[gas_masks][me][rating]" value="limit">
                                        <label for="gas_masks_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="gas_masks_none" name="preferences[gas_masks][me][rating]" value="not_entered" checked>
                                        <label for="gas_masks_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[gas_masks][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="gas_masks_partner_fav" name="preferences[gas_masks][partner][rating]" value="favorite">
                                        <label for="gas_masks_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="gas_masks_partner_like" name="preferences[gas_masks][partner][rating]" value="like">
                                        <label for="gas_masks_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="gas_masks_partner_ind" name="preferences[gas_masks][partner][rating]" value="indifferent">
                                        <label for="gas_masks_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="gas_masks_partner_maybe" name="preferences[gas_masks][partner][rating]" value="maybe">
                                        <label for="gas_masks_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="gas_masks_partner_limit" name="preferences[gas_masks][partner][rating]" value="limit">
                                        <label for="gas_masks_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="gas_masks_partner_none" name="preferences[gas_masks][partner][rating]" value="not_entered" checked>
                                        <label for="gas_masks_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Masks</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[masks][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="masks_fav" name="preferences[masks][me][rating]" value="favorite">
                                        <label for="masks_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="masks_like" name="preferences[masks][me][rating]" value="like">
                                        <label for="masks_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="masks_ind" name="preferences[masks][me][rating]" value="indifferent">
                                        <label for="masks_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="masks_maybe" name="preferences[masks][me][rating]" value="maybe">
                                        <label for="masks_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="masks_limit" name="preferences[masks][me][rating]" value="limit">
                                        <label for="masks_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="masks_none" name="preferences[masks][me][rating]" value="not_entered" checked>
                                        <label for="masks_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[masks][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="masks_partner_fav" name="preferences[masks][partner][rating]" value="favorite">
                                        <label for="masks_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="masks_partner_like" name="preferences[masks][partner][rating]" value="like">
                                        <label for="masks_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="masks_partner_ind" name="preferences[masks][partner][rating]" value="indifferent">
                                        <label for="masks_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="masks_partner_maybe" name="preferences[masks][partner][rating]" value="maybe">
                                        <label for="masks_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="masks_partner_limit" name="preferences[masks][partner][rating]" value="limit">
                                        <label for="masks_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="masks_partner_none" name="preferences[masks][partner][rating]" value="not_entered" checked>
                                        <label for="masks_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Choker</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[choker][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="choker_fav" name="preferences[choker][me][rating]" value="favorite">
                                        <label for="choker_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="choker_like" name="preferences[choker][me][rating]" value="like">
                                        <label for="choker_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="choker_ind" name="preferences[choker][me][rating]" value="indifferent">
                                        <label for="choker_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="choker_maybe" name="preferences[choker][me][rating]" value="maybe">
                                        <label for="choker_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="choker_limit" name="preferences[choker][me][rating]" value="limit">
                                        <label for="choker_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="choker_none" name="preferences[choker][me][rating]" value="not_entered" checked>
                                        <label for="choker_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[choker][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="choker_partner_fav" name="preferences[choker][partner][rating]" value="favorite">
                                        <label for="choker_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="choker_partner_like" name="preferences[choker][partner][rating]" value="like">
                                        <label for="choker_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="choker_partner_ind" name="preferences[choker][partner][rating]" value="indifferent">
                                        <label for="choker_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="choker_partner_maybe" name="preferences[choker][partner][rating]" value="maybe">
                                        <label for="choker_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="choker_partner_limit" name="preferences[choker][partner][rating]" value="limit">
                                        <label for="choker_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="choker_partner_none" name="preferences[choker][partner][rating]" value="not_entered" checked>
                                        <label for="choker_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Leather</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[leather][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="leather_fav" name="preferences[leather][me][rating]" value="favorite">
                                        <label for="leather_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="leather_like" name="preferences[leather][me][rating]" value="like">
                                        <label for="leather_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="leather_ind" name="preferences[leather][me][rating]" value="indifferent">
                                        <label for="leather_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="leather_maybe" name="preferences[leather][me][rating]" value="maybe">
                                        <label for="leather_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="leather_limit" name="preferences[leather][me][rating]" value="limit">
                                        <label for="leather_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="leather_none" name="preferences[leather][me][rating]" value="not_entered" checked>
                                        <label for="leather_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[leather][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="leather_partner_fav" name="preferences[leather][partner][rating]" value="favorite">
                                        <label for="leather_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="leather_partner_like" name="preferences[leather][partner][rating]" value="like">
                                        <label for="leather_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="leather_partner_ind" name="preferences[leather][partner][rating]" value="indifferent">
                                        <label for="leather_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="leather_partner_maybe" name="preferences[leather][partner][rating]" value="maybe">
                                        <label for="leather_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="leather_partner_limit" name="preferences[leather][partner][rating]" value="limit">
                                        <label for="leather_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="leather_partner_none" name="preferences[leather][partner][rating]" value="not_entered" checked>
                                        <label for="leather_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Latex</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[latex][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="latex_fav" name="preferences[latex][me][rating]" value="favorite">
                                        <label for="latex_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="latex_like" name="preferences[latex][me][rating]" value="like">
                                        <label for="latex_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="latex_ind" name="preferences[latex][me][rating]" value="indifferent">
                                        <label for="latex_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="latex_maybe" name="preferences[latex][me][rating]" value="maybe">
                                        <label for="latex_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="latex_limit" name="preferences[latex][me][rating]" value="limit">
                                        <label for="latex_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="latex_none" name="preferences[latex][me][rating]" value="not_entered" checked>
                                        <label for="latex_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[latex][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="latex_partner_fav" name="preferences[latex][partner][rating]" value="favorite">
                                        <label for="latex_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="latex_partner_like" name="preferences[latex][partner][rating]" value="like">
                                        <label for="latex_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="latex_partner_ind" name="preferences[latex][partner][rating]" value="indifferent">
                                        <label for="latex_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="latex_partner_maybe" name="preferences[latex][partner][rating]" value="maybe">
                                        <label for="latex_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="latex_partner_limit" name="preferences[latex][partner][rating]" value="limit">
                                        <label for="latex_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="latex_partner_none" name="preferences[latex][partner][rating]" value="not_entered" checked>
                                        <label for="latex_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Uniform / custome</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[uniform][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="uniform_fav" name="preferences[uniform][me][rating]" value="favorite">
                                        <label for="uniform_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="uniform_like" name="preferences[uniform][me][rating]" value="like">
                                        <label for="uniform_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="uniform_ind" name="preferences[uniform][me][rating]" value="indifferent">
                                        <label for="cuniform_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="uniform_maybe" name="preferences[uniform][me][rating]" value="maybe">
                                        <label for="uniform_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="uniform_limit" name="preferences[uniform][me][rating]" value="limit">
                                        <label for="uniform_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="uniform_none" name="preferences[uniform][me][rating]" value="not_entered" checked>
                                        <label for="uniform_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[uniform][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="uniform_partner_fav" name="preferences[uniform][partner][rating]" value="favorite">
                                        <label for="uniform_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="uniform_partner_like" name="preferences[uniform][partner][rating]" value="like">
                                        <label for="uniform_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="uniform_partner_ind" name="preferences[uniform][partner][rating]" value="indifferent">
                                        <label for=uniform_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="uniform_partner_maybe" name="preferences[uniform][partner][rating]" value="maybe">
                                        <label for="uniform_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="uniform_partner_limit" name="preferences[uniform][partner][rating]" value="limit">
                                        <label for="uniform_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="uniform_partner_none" name="preferences[uniform][partner][rating]" value="not_entered" checked>
                                        <label for="uniform_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Cross-dressing</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[cross_dressing][me][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="cross_dressing_fav" name="preferences[cross_dressing][me][rating]" value="favorite">
                                        <label for="cross_dressing_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="cross_dressing_like" name="preferences[cross_dressing][me][rating]" value="like">
                                        <label for="cross_dressing_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="cross_dressing_ind" name="preferences[cross_dressing][me][rating]" value="indifferent">
                                        <label for="cross_dressing_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="cross_dressing_maybe" name="preferences[cross_dressing][me][rating]" value="maybe">
                                        <label for="cross_dressing_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="cross_dressing_limit" name="preferences[cross_dressing][me][rating]" value="limit">
                                        <label for="cross_dressing_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="cross_dressing_none" name="preferences[cross_dressing][me][rating]" value="not_entered" checked>
                                        <label for="cross_dressing_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[cross_dressing][partner][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="cross_dressing_partner_fav" name="preferences[cross_dressing][partner][rating]" value="favorite">
                                        <label for="cross_dressing_partner_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="cross_dressing_partner_like" name="preferences[cross_dressing][partner][rating]" value="like">
                                        <label for="cross_dressing_partner_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="cross_dressing_partner_ind" name="preferences[cross_dressing][partner][rating]" value="indifferent">
                                        <label for="cross_dressing_partner_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="cross_dressing_partner_maybe" name="preferences[cross_dressing][partner][rating]" value="maybe">
                                        <label for="cross_dressing_partner_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="cross_dressing_partner_limit" name="preferences[cross_dressing][partner][rating]" value="limit">
                                        <label for="cross_dressing_partner_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="cross_dressing_partner_none" name="preferences[cross_dressing][partner][rating]" value="not_entered" checked>
                                        <label for="cross_dressing_partner_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>


                    </table>
                </div>










                <div class="table-wrapper">
                    <h2>Positions</h2>
                    <table class="preference-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Giving</th>
                                <th>Recieving</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Clothing preference rows (Tried checkbox + rating radios) -->
                            <tr>
                                <td><div class="label-cell">Missionary</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[missionary][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="missionary_giving_fav" name="preferences[missionary][giving][rating]" value="favorite">
                                        <label for="missionary_giving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="missionary_giving_like" name="preferences[missionary][giving][rating]" value="like">
                                        <label for="missionary_giving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="missionary_giving_ind" name="preferences[missionary][giving][rating]" value="indifferent">
                                        <label for="missionary_giving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="missionary_giving_maybe" name="preferences[missionary][giving][rating]" value="maybe">
                                        <label for="missionary_giving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="missionary_giving_limit" name="preferences[missionary][giving][rating]" value="limit">
                                        <label for="missionary_giving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="missionary_giving_none" name="preferences[missionary][giving][rating]" value="not_entered" checked>
                                        <label for="missionary_giving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[missionary][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="missionary_receiving_fav" name="preferences[missionary][receiving][rating]" value="favorite">
                                        <label for="missionary_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="missionary_receiving_like" name="preferences[missionary][receiving][rating]" value="like">
                                        <label for="missionary_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="missionary_receiving_ind" name="preferences[missionary][receiving][rating]" value="indifferent">
                                        <label for="missionary_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="missionary_receiving_maybe" name="preferences[missionary][receiving][rating]" value="maybe">
                                        <label for="missionary_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="missionary_receiving_limit" name="preferences[missionary][receiving][rating]" value="limit">
                                        <label for="missionary_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="missionary_receiving_none" name="preferences[missionary][receiving][rating]" value="not_entered" checked>
                                        <label for="missionary_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Doggystyle</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[doggystyle][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="doggystyle_giving_fav" name="preferences[doggystyle][giving][rating]" value="favorite">
                                        <label for="doggystyle_giving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="doggystyle_giving_like" name="preferences[doggystyle][giving][rating]" value="like">
                                        <label for="doggystyle_giving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="doggystyle_giving_ind" name="preferences[doggystyle][giving][rating]" value="indifferent">
                                        <label for="doggystyle_giving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="doggystyle_giving_maybe" name="preferences[doggystyle][giving][rating]" value="maybe">
                                        <label for="doggystyle_giving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="doggystyle_giving_limit" name="preferences[doggystyle][giving][rating]" value="limit">
                                        <label for="doggystyle_giving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="doggystyle_giving_none" name="preferences[doggystyle][giving][rating]" value="not_entered" checked>
                                        <label for="doggystyle_giving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[doggystyle][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="doggystyle_receiving_fav" name="preferences[doggystyle][receiving][rating]" value="favorite">
                                        <label for="doggystyle_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="doggystyle_receiving_like" name="preferences[doggystyle][receiving][rating]" value="like">
                                        <label for="doggystyle_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="doggystyle_receiving_ind" name="preferences[doggystyle][receiving][rating]" value="indifferent">
                                        <label for="doggystyle_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="doggystyle_receiving_maybe" name="preferences[doggystyle][receiving][rating]" value="maybe">
                                        <label for="doggystyle_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="doggystyle_receiving_limit" name="preferences[doggystyle][receiving][rating]" value="limit">
                                        <label for="doggystyle_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="doggystyle_receiving_none" name="preferences[doggystyle][receiving][rating]" value="not_entered" checked>
                                        <label for="doggystyle_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Sixty-Nine</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[sixty_nine][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="sixty_nine_fav" name="preferences[sixty_nine][giving][rating]" value="favorite">
                                        <label for="sixty_nine_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="sixty_nine_like" name="preferences[sixty_nine][giving][rating]" value="like">
                                        <label for="sixty_nine_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="sixty_nine_ind" name="preferences[sixty_nine][giving][rating]" value="indifferent">
                                        <label for="sixty_nine_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="sixty_nine_maybe" name="preferences[sixty_nine][giving][rating]" value="maybe">
                                        <label for="sixty_nine_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="sixty_nine_limit" name="preferences[sixty_nine][giving][rating]" value="limit">
                                        <label for="sixty_nine_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="sixty_nine_none" name="preferences[sixty_nine][giving][rating]" value="not_entered" checked>
                                        <label for="sixty_nine_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[sixty_nine][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="sixty_nine_receiving_fav" name="preferences[sixty_nine][receiving][rating]" value="favorite">
                                        <label for="sixty_nine_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="sixty_nine_receiving_like" name="preferences[sixty_nine][receiving][rating]" value="like">
                                        <label for="sixty_nine_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="sixty_nine_receiving_ind" name="preferences[sixty_nine][receiving][rating]" value="indifferent">
                                        <label for="sixty_nine_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="sixty_nine_receiving_maybe" name="preferences[sixty_nine][receiving][rating]" value="maybe">
                                        <label for="sixty_nine_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="sixty_nine_receiving_limit" name="preferences[sixty_nine][receiving][rating]" value="limit">
                                        <label for="sixty_nine_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="sixty_nine_receiving_none" name="preferences[sixty_nine][receiving][rating]" value="not_entered" checked>
                                        <label for="sixty_nine_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Cowgirl</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[cowgirl][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="cowgirl_fav" name="preferences[cowgirl][giving][rating]" value="favorite">
                                        <label for="cowgirl_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="cowgirl_like" name="preferences[cowgirl][giving][rating]" value="like">
                                        <label for="cowgirl_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="cowgirl_ind" name="preferences[cowgirl][giving][rating]" value="indifferent">
                                        <label for="cowgirl_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="cowgirl_maybe" name="preferences[cowgirl][giving][rating]" value="maybe">
                                        <label for="cowgirl_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="cowgirl_limit" name="preferences[cowgirl][giving][rating]" value="limit">
                                        <label for="cowgirl_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="cowgirl_none" name="preferences[cowgirl][giving][rating]" value="not_entered" checked>
                                        <label for="cowgirl_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[cowgirl][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="cowgirl_receiving_fav" name="preferences[cowgirl][receiving][rating]" value="favorite">
                                        <label for="cowgirl_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="cowgirl_receiving_like" name="preferences[cowgirl][receiving][rating]" value="like">
                                        <label for="cowgirl_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="cowgirl_receiving_ind" name="preferences[cowgirl][receiving][rating]" value="indifferent">
                                        <label for="cowgirl_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="cowgirl_receiving_maybe" name="preferences[cowgirl][receiving][rating]" value="maybe">
                                        <label for="cowgirl_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="cowgirl_receiving_limit" name="preferences[cowgirl][receiving][rating]" value="limit">
                                        <label for="cowgirl_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="cowgirl_receiving_none" name="preferences[cowgirl][receiving][rating]" value="not_entered" checked>
                                        <label for="cowgirl_receiving_none" class="dot-label dot-not-entered" title="Not entered"></Labe>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Reverse-Cowgirl</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[reverse_cowgirl][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="reverse_cowgirl_fav" name="preferences[reverse_cowgirl][giving][rating]" value="favorite">
                                        <label for="reverse_cowgirl_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="reverse_cowgirl_like" name="preferences[reverse_cowgirl][giving][rating]" value="like">
                                        <label for="reverse_cowgirl_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="reverse_cowgirl_ind" name="preferences[reverse_cowgirl][giving][rating]" value="indifferent">
                                        <label for="reverse_cowgirl_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="reverse_cowgirl_maybe" name="preferences[reverse_cowgirl][giving][rating]" value="maybe">
                                        <label for="reverse_cowgirl_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="reverse_cowgirl_limit" name="preferences[reverse_cowgirl][giving][rating]" value="limit">
                                        <label for="reverse_cowgirl_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="reverse_cowgirl_none" name="preferences[reverse_cowgirl][giving][rating]" value="not_entered" checked>
                                        <label for="reverse_cowgirl_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[reverse_cowgirl][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="reverse_cowgirl_receiving_fav" name="preferences[reverse_cowgirl][receiving][rating]" value="favorite">
                                        <label for="reverse_cowgirl_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="reverse_cowgirl_receiving_like" name="preferences[reverse_cowgirl][receiving][rating]" value="like">
                                        <label for="reverse_cowgirl_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="reverse_cowgirl_receiving_ind" name="preferences[reverse_cowgirl][receiving][rating]" value="indifferent">
                                        <label for="reverse_cowgirl_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="reverse_cowgirl_receiving_maybe" name="preferences[reverse_cowgirl][receiving][rating]" value="maybe">
                                        <label for="reverse_cowgirl_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="reverse_cowgirl_receiving_limit" name="preferences[reverse_cowgirl][receiving][rating]" value="limit">
                                        <label for="reverse_cowgirl_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="reverse_cowgirl_receiving_none" name="preferences[reverse_cowgirl][receiving][rating]" value="not_entered" checked>
                                        <label for="reverse_cowgirl_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Piledriver</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[piledriver][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="piledriver_fav" name="preferences[piledriver][giving][rating]" value="favorite">
                                        <label for="piledriver_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="piledriver_like" name="preferences[piledriver][giving][rating]" value="like">
                                        <label for="piledriver_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="piledriver_ind" name="preferences[piledriver][giving][rating]" value="indifferent">
                                        <label for="piledriver_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="piledriver_maybe" name="preferences[piledriver][giving][rating]" value="maybe">
                                        <label for="piledriver_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="piledriver_limit" name="preferences[piledriver][giving][rating]" value="limit">
                                        <label for="piledriver_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="piledriver_none" name="preferences[piledriver][giving][rating]" value="not_entered" checked>
                                        <label for="piledriver_none" class="dot-label dot-not-entered" title="Not entered"></Labe>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[piledriver][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="piledriver_receiving_fav" name="preferences[piledriver][receiving][rating]" value="favorite">
                                        <label for="piledriver_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="piledriver_receiving_like" name="preferences[piledriver][receiving][rating]" value="like">
                                        <label for="piledriver_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="piledriver_receiving_ind" name="preferences[piledriver][receiving][rating]" value="indifferent">
                                        <label for="piledriver_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="piledriver_receiving_maybe" name="preferences[piledriver][receiving][rating]" value="maybe">
                                        <label for="piledriver_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="piledriver_receiving_limit" name="preferences[piledriver][receiving][rating]" value="limit">
                                        <label for="piledriver_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="piledriver_receiving_none" name="preferences[piledriver][receiving][rating]" value="not_entered" checked>
                                        <label for="piledriver_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Mating Press</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[mating_press][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="mating_press_fav" name="preferences[mating_press][giving][rating]" value="favorite">
                                        <label for="mating_press_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="mating_press_like" name="preferences[mating_press][giving][rating]" value="like">
                                        <label for="mating_press_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="mating_press_ind" name="preferences[mating_press][giving][rating]" value="indifferent">
                                        <label for="mating_press_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="mating_press_maybe" name="preferences[mating_press][giving][rating]" value="maybe">
                                        <label for="mating_press_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="mating_press_limit" name="preferences[mating_press][giving][rating]" value="limit">
                                        <label for="mating_press_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="mating_press_none" name="preferences[mating_press][giving][rating]" value="not_entered" checked>
                                        <label for="mating_press_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[mating_press][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="mating_press_receiving_fav" name="preferences[mating_press][receiving][rating]" value="favorite">
                                        <label for="mating_press_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="mating_press_receiving_like" name="preferences[mating_press][receiving][rating]" value="like">
                                        <label for="mating_press_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="mating_press_receiving_ind" name="preferences[mating_press][receiving][rating]" value="indifferent">
                                        <label for="mating_press_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="mating_press_receiving_maybe" name="preferences[mating_press][receiving][rating]" value="maybe">
                                        <label for="mating_press_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="mating_press_receiving_limit" name="preferences[mating_press][receiving][rating]" value="limit">
                                        <label for="mating_press_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="mating_press_receiving_none" name="preferences[mating_press][receiving][rating]" value="not_entered" checked>
                                        <label for="mating_press_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Spitroasting</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[spitroasting][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="spitroasting_fav" name="preferences[spitroasting][giving][rating]" value="favorite">
                                        <label for="spitroasting_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="spitroasting_like" name="preferences[spitroasting][giving][rating]" value="like">
                                        <label for="spitroasting_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="spitroasting_ind" name="preferences[spitroasting][giving][rating]" value="indifferent">
                                        <label for="spitroasting_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="spitroasting_maybe" name="preferences[spitroasting][giving][rating]" value="maybe">
                                        <label for="spitroasting_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="spitroasting_limit" name="preferences[spitroasting][giving][rating]" value="limit">
                                        <label for="spitroasting_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="spitroasting_none" name="preferences[spitroasting][giving][rating]" value="not_entered" checked>
                                        <label for="spitroasting_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[spitroasting][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="spitroasting_receiving_fav" name="preferences[spitroasting][receiving][rating]" value="favorite">
                                        <label for="spitroasting_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="spitroasting_receiving_like" name="preferences[spitroasting][receiving][rating]" value="like">
                                        <label for="spitroasting_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="spitroasting_receiving_ind" name="preferences[spitroasting][receiving][rating]" value="indifferent">
                                        <label for="spitroasting_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="spitroasting_receiving_maybe" name="preferences[spitroasting][receiving][rating]" value="maybe">
                                        <label for="spitroasting_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="spitroasting_receiving_limit" name="preferences[spitroasting][receiving][rating]" value="limit">
                                        <label for="spitroasting_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="spitroasting_receiving_none" name="preferences[spitroasting][receiving][rating]" value="not_entered" checked>
                                        <label for="spitroasting_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Prone Bone</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[prone_bone][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="prone_bone_fav" name="preferences[prone_bone][giving][rating]" value="favorite">
                                        <label for="prone_bone_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="prone_bone_like" name="preferences[prone_bone][giving][rating]" value="like">
                                        <label for="prone_bone_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="prone_bone_ind" name="preferences[prone_bone][giving][rating]" value="indifferent">
                                        <label for="prone_bone_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="prone_bone_maybe" name="preferences[prone_bone][giving][rating]" value="maybe">
                                        <label for="prone_bone_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="prone_bone_limit" name="preferences[prone_bone][giving][rating]" value="limit">
                                        <label for="prone_bone_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="prone_bone_none" name="preferences[prone_bone][giving][rating]" value="not_entered" checked>
                                        <label for="prone_bone_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[prone_bone][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="prone_bone_receiving_fav" name="preferences[prone_bone][receiving][rating]" value="favorite">
                                        <label for="prone_bone_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="prone_bone_receiving_like" name="preferences[prone_bone][receiving][rating]" value="like">
                                        <label for="prone_bone_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="prone_bone_receiving_ind" name="preferences[prone_bone][receiving][rating]" value="indifferent">
                                        <label for="prone_bone_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="prone_bone_receiving_maybe" name="preferences[prone_bone][receiving][rating]" value="maybe">
                                        <label for="prone_bone_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="prone_bone_receiving_limit" name="preferences[prone_bone][receiving][rating]" value="limit">
                                        <label for="prone_bone_receiving_limit" class="dot-label dot-limit" title="Limit"></Label>
                                        <input type="radio" id="prone_bone_receiving_none" name="preferences[prone_bone][receiving][rating]" value="not_entered" checked>
                                        <label for="prone_bone_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Spooning</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[spooning][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="spooning_fav" name="preferences[spooning][giving][rating]" value="favorite">
                                        <label for="spooning_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="spooning_like" name="preferences[spooning][giving][rating]" value="like">
                                        <label for="spooning_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="spooning_ind" name="preferences[spooning][giving][rating]" value="indifferent">
                                        <label for="spooning_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="spooning_maybe" name="preferences[spooning][giving][rating]" value="maybe">
                                        <label for="spooning_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="spooning_limit" name="preferences[spooning][giving][rating]" value="limit">
                                        <label for="spooning_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="spooning_none" name="preferences[spooning][giving][rating]" value="not_entered" checked>
                                        <label for="spooning_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[spooning][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="spooning_receiving_fav" name="preferences[spooning][receiving][rating]" value="favorite">
                                        <label for="spooning_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="spooning_receiving_like" name="preferences[spooning][receiving][rating]" value="like">
                                        <label for="spooning_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="spooning_receiving_ind" name="preferences[spooning][receiving][rating]" value="indifferent">
                                        <label for="spooning_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="spooning_receiving_maybe" name="preferences[spooning][receiving][rating]" value="maybe">
                                        <label for="spooning_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="spooning_receiving_limit" name="preferences[spooning][receiving][rating]" value="limit">
                                        <label for="spooning_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="spooning_receiving_none" name="preferences[spooning][receiving][rating]" value="not_entered" checked>
                                        <label for="spooning_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Swing</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[swing][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="swing_fav" name="preferences[swing][giving][rating]" value="favorite">
                                        <label for="swing_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="swing_like" name="preferences[swing][giving][rating]" value="like">
                                        <label for="swing_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="swing_ind" name="preferences[swing][giving][rating]" value="indifferent">
                                        <label for="swing_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="swing_maybe" name="preferences[swing][giving][rating]" value="maybe">
                                        <label for="swing_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="swing_limit" name="preferences[swing][giving][rating]" value="limit">
                                        <label for="swing_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="swing_none" name="preferences[swing][giving][rating]" value="not_entered" checked>
                                        <label for="swing_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[swing][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="swing_receiving_fav" name="preferences[swing][receiving][rating]" value="favorite">
                                        <label for="swing_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="swing_receiving_like" name="preferences[swing][receiving][rating]" value="like">
                                        <label for="swing_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="swing_receiving_ind" name="preferences[swing][receiving][rating]" value="indifferent">
                                        <label for="swing_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="swing_receiving_maybe" name="preferences[swing][receiving][rating]" value="maybe">
                                        <label for="swing_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="swing_receiving_limit" name="preferences[swing][receiving][rating]" value="limit">
                                        <label for="swing_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="swing_receiving_none" name="preferences[swing][receiving][rating]" value="not_entered" checked>
                                        <label for="swing_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><div class="label-cell">Lotus</div></td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[lotus][giving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="lotus_fav" name="preferences[lotus][giving][rating]" value="favorite">
                                        <label for="lotus_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="lotus_like" name="preferences[lotus][giving][rating]" value="like">
                                        <label for="lotus_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="lotus_ind" name="preferences[lotus][giving][rating]" value="indifferent">
                                        <label for="lotus_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="lotus_maybe" name="preferences[lotus][giving][rating]" value="maybe">
                                        <label for="lotus_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="lotus_limit" name="preferences[lotus][giving][rating]" value="limit">
                                        <label for="lotus_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="lotus_none" name="preferences[lotus][giving][rating]" value="not_entered" checked>
                                        <label for="lotus_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="choice-cell">
                                        <label class="choice-dot-checkbox" title="Tried">
                                            <input type="checkbox" name="preferences[lotus][receiving][tried]" value="1">
                                            <span class="dot checkbox-visual"></span>
                                        </label>
                                        <span class="choice-separator"></span>
                                        <input type="radio" id="lotus_receiving_fav" name="preferences[lotus][receiving][rating]" value="favorite">
                                        <label for="lotus_receiving_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                        <input type="radio" id="lotus_receiving_like" name="preferences[lotus][receiving][rating]" value="like">
                                        <label for="lotus_receiving_like" class="dot-label dot-like" title="Like"></label>
                                        <input type="radio" id="lotus_receiving_ind" name="preferences[lotus][receiving][rating]" value="indifferent">
                                        <label for="lotus_receiving_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                        <input type="radio" id="lotus_receiving_maybe" name="preferences[lotus][receiving][rating]" value="maybe">
                                        <label for="lotus_receiving_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                        <input type="radio" id="lotus_receiving_limit" name="preferences[lotus][receiving][rating]" value="limit">
                                        <label for="lotus_receiving_limit" class="dot-label dot-limit" title="Limit"></label>
                                        <input type="radio" id="lotus_receiving_none" name="preferences[lotus][receiving][rating]" value="not_entered" checked>
                                        <label for="lotus_receiving_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <div class="table-wrapper">
                    <h2>General</h2>
                    <table class="preference-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Giving</th>
                                <th>Recieving</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($positions as $position): ?>
                                <tr>
                                    <td><div class="label-cell"><?php echo htmlspecialchars($position); ?></div></td>
                                    <td>
                                        <div class="choice-cell">
                                            <label class="choice-dot-checkbox" title="Tried">
                                                <input type="checkbox" name="preferences[<?php echo strtolower(str_replace(\' \', \'_\', $position)); ?>][giving][tried]" value="1">
                                                <span class="dot checkbox-visual"></span>
                                            </label>
                                            <span class="choice-separator"></span>
                                            <?php foreach ($rating_options as $value => $class): ?>
                                                <input type="radio" id="<?php echo strtolower(str_replace(' ', '_', $position)); ?>_giving_<?php echo $value; ?>" name="preferences[<?php echo strtolower(str_replace(' ', '_', $position)); ?>][giving][rating]" value="<?php echo $value; ?>">
                                                <label for="<?php echo strtolower(str_replace(' ', '_', $position)); ?>_giving_<?php echo $value; ?>" class="dot-label <?php echo $class; ?>" title="<?php echo ucfirst(str_replace('_', ' ', $value)); ?>"></label>
                                            <?php endforeach; ?>
                                        </div>



            </fieldset>

            






            <fieldset class="form-section">
                <legend>Settings</legend>

                <div class="form-group">
                    <label for="password">Edit password</label>
                    <input type="password" id="password" name="edit_password" required>
                    <div class="form-help-text">You will need this password for any future changes. Keep it safe!</div>
                </div>
                
                <div class="form-group">
                    <label>Link</label>
                    
                    <div class="radio-group-horizontal">
                        
                        <div class="radio-item">
                            <input type="radio" id="url_random" name="url_mode" value="random" checked>
                            <label for="url_random">Random</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="url_custom" name="url_mode" value="custom">
                            <label for="url_custom">Custom</label>
                        </div>

                    </div>
                </div>
                
                <div class="form-group" id="custom-slug-group">

                    <div class="input-group">
                        <span class="input-group-prefix">kinklist.teres4.win/</span>
                        
                        <input type="text" id="custom_slug" name="custom_slug" pattern="[a-zA-Z0-9-]+" placeholder="my-list">
                    </div>

                    <div class="form-help-text">Povolena jsou pouze písmena, čísla a pomlčky.</div>
                </div>

            </fieldset>

            <button type="submit" class="submit-button">Save</button>
            
        </form>








    
 



';
/* 
<table class="preference-table">
        <thead>
            <tr>
                <th></th> <th>Partner</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Skinny</td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Chubby</td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Fit</td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Muscular</td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Small Breasts
                    <span class="sub-text">A-B Cups</span>
                </td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table> */