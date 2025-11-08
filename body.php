<?php

echo '




<form action="save.php" method="POST">

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
                    

            
            <fieldset class="form-section">
                <legend>Preference</legend>

                <div class="table-wrapper">
                    <table class="preference-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Líbání</td>
                                <td class="choice-cell">
                                    
                                    
                                

                                    <input type="radio" id="kiss_fav" name="preferences[kissing]" value="favorite">
                                    <label for="kiss_fav" class="dot-label dot-favorite" title="Favorite"></label>
                                
                                    <input type="radio" id="kiss_like" name="preferences[kissing]" value="like">
                                    <label for="kiss_like" class="dot-label dot-like" title="Like"></label>
                                
                                    <input type="radio" id="kiss_ind" name="preferences[kissing]" value="indifferent">
                                    <label for="kiss_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                                
                                    <input type="radio" id="kiss_maybe" name="preferences[kissing]" value="maybe">
                                    <label for="kiss_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                                
                                    <input type="radio" id="kiss_limit" name="preferences[kissing]" value="limit">
                                    <label for="kiss_limit" class="dot-label dot-limit" title="Limit"></label>
                                
                                    <input type="radio" id="kiss_none" name="preferences[kissing]" value="not_entered" checked>
                                    <label for="kiss_none" class="dot-label dot-not-entered" title="Not entered"></label>
                                    
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Bondage (lehká)</td>
                                <td class="choice-cell">
                                    <input type="radio" id="bond_fav" name="preferences[bondage_light]" value="favorite">
                                    <label for="bond_fav" class="dot-label dot-favorite" title="Oblíbené"></label>
                                </td>
                                <td class="choice-cell">
                                    <input type="radio" id="bond_like" name="preferences[bondage_light]" value="like">
                                    <label for="bond_like" class="dot-label dot-like" title="Líbí se"></label>
                                </td>
                                <td class="choice-cell">
                                    <input type="radio" id="bond_cur" name="preferences[bondage_light]" value="curious">
                                    <label for="bond_cur" class="dot-label dot-curious" title="Zvědavost"></label>
                                </td>
                                <td class="choice-cell">
                                    <input type="radio" id="bond_ind" name="preferences[bondage_light]" value="indifferent">
                                    <label for="bond_ind" class="dot-label dot-indifferent" title="Je mi to jedno"></label>
                                </td>
                                <td class="choice-cell">
                                    <input type="radio" id="bond_maybe" name="preferences[bondage_light]" value="maybe">
                                    <label for="bond_maybe" class="dot-label dot-maybe" title="Možná"></label>
                                </td>
                                <td class="choice-cell">
                                    <input type="radio" id="bond_limit" name="preferences[bondage_light]" value="limit">
                                    <label for="bond_limit" class="dot-label dot-limit" title="Limit"></label>
                                </td>
                                <td class="choice-cell">
                                    <input type="radio" id="bond_none" name="preferences[bondage_light]" value="not_entered" checked>
                                    <label for="bond_none" class="dot-label dot-not-entered" title="Nevyplněno"></label>
                                </td>
                            </tr>
                            
                            </tbody>
                    </table>
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