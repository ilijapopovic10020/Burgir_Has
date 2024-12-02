$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('nav').addClass('fixed-top').addClass('bg-dark').removeClass('shadow-lg');
        } else {
            $('nav').removeClass('fixed-top').removeClass('bg-dark').addClass('shadow-lg');
        }
    });
    // food by filter
    $('#btn-filter').click(function () {
        filter();
    });
    // clear food filter
    $('#btn-filter-clear').click(function () {
        $('#sort-keyword').val('');
        $('#sort-category').val('0');
        $('#sort-popular').prop('checked', false);

        filter();
    });
    //sign in
    $('#btn-sign-in').click(function () {
        console.log('ovo je u funkciji za logovanje')
        let username = $('#log-username');
        let password = $('#log-password');

        //regExp
        let regUsername = /^[A-Za-z0-9]{8,}$/;
        let regPassword = /^(?=.*?[A-Za-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

        console.log("sign in")

        //error counter
        let errors = 0;

        //regExpCheck
        errors += regExpCheck(regUsername, username, 'Korisničko ime');
        errors += regExpCheck(regPassword, password, 'Lozinka');

        if (errors == 0) {
            let url = '../../logic/sign-in.php';
            let data = {
                username: username.val(), password: password.val()
            }

            ajaxCallback(url, 'post', data, function (result) {
                console.log(result.message);
                location.href = '../../index.php';
            }, function (xhr) {
                if (xhr.status === 422) {
                    $('#error-message').val('Korisnicko ime ili lozinka nisu ispravno uneseni.')
                }
            });
        }
    });
    if (window.location.href.indexOf("sign-in.php") > -1) {
        $(document).keyup(function (event) {
            if (event.key === "Enter") {
                console.log('keyup ')
                $("#btn-sign-in").click();
            }
        });
    }
    //sign up
    $('#btn-sign-up').click(function () {

        console.log('sign up')
        //inputs
        let fullName = $('#reg-full-name');
        let email = $('#reg-email');
        let username = $('#reg-username');
        let password = $('#reg-password');
        let passwordConfirm = $('#reg-password-confirm');

        //regExp
        let regFullName = /^[A-ZŽČĆŠĐ][a-zžčćšđ]{3,}(\s[A-ZŽČĆŠĐ][a-zžčćšđ]{3,})+$/;
        let regEmail = /^[a-z|A-Z][a-z|A-Z+.|0-9]{2,40}[a-z|A-Z|0-9][@]([a-z]{3,12}[.])*[a-z]{2,4}$/;
        let regUsername = /^[A-Za-z0-9]{8,}$/;
        let regPassword = /^(?=.*?[A-Za-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

        //error counter
        let errors = 0;

        //regExpCheck
        errors += regExpCheck(regFullName, fullName, 'Ime i prezime', 'Ana Marija Jovanović');
        errors += regExpCheck(regEmail, email, 'E-adresa', 'anamarija000@gmail.com');
        errors += regExpCheck(regUsername, username, 'Korisničko ime', 'Mora imati najmanje 8 karaktera, pocetno veliko slovo, mala slova i brojeve');
        errors += regExpCheck(regPassword, password, 'Lozinka', 'Velika, mala slova, brojeve, znakove: #?!@$%^&*-');

        //pasword confirm

        if (passwordConfirm.val() == "") {
            passwordConfirm.next().removeAttr('hidden');
            passwordConfirm.next().text("Polje potvrdi lozinku ne sme biti prazno.");
            errors++;
        } else if (!regPassword.test(passwordConfirm.val())) {
            passwordConfirm.next().removeAttr('hidden');
            passwordConfirm.next().text("Polje potvrdi lozinku nije ispravno popunjeno. Dozvoljeno: Veliko, malo slovo, brojevi, \"#?!@$%^&*-\".");
            errors++;
        } else if (!(password.val() == passwordConfirm.val())) {
            passwordConfirm.next().removeAttr('hidden');
            passwordConfirm.next().text("Polja lozinka i potvrdi lozinku moraju biti isti.");
            errors++;
        } else {
            passwordConfirm.next().attr('hidden', 'hidden');
            passwordConfirm.next().text("");
            errors = 0;
        }

        if (errors == 0) {
            let url = '../../logic/sign-up.php';
            let data = {
                fullName: fullName.val(),
                email: email.val(),
                username: username.val(),
                password: password.val(),
                passwordConfirm: passwordConfirm.val()
            }

            ajaxCallback(url, 'post', data,
                function (result) {
                    console.log(result.message);
                    location.href = '../../index.php';
                }, function (xhr) {
                    console.log(xhr);
                });
        }
    });
    if (window.location.href.indexOf("sign-up.php") > -1) {
        $(document).keyup(function (event) {
            if (event.key === "Enter") {
                $("#btn-sign-up").click();
            }
        });
    }
    //message
    $('#btn-message').click(function () {
        let errors = 0;
        //inputs
        let fullName = $('#message-full-name');
        let email = $('#message-email');
        let message = $('#message');
        //inputs reg
        let regFullName = /^[A-ZŽČĆŠĐ][a-zžčćšđ]{3,}(\s[A-ZŽČĆŠĐ][a-zžčćšđ]{3,})+$/;
        let regEmail = /^[a-z|A-Z][a-z|A-Z+.|0-9]{2,40}[a-z|A-Z|0-9][@]([a-z]{3,12}[.])*[a-z]{2,4}$/;
        let regMessage = /^.{8,}$/;

        //regExpCheck

        errors += regExpCheck(regFullName, fullName, 'Ime i prezime', 'Ana Marija Jovanović');
        errors += regExpCheck(regEmail, email, 'E-adresa', 'anamarija000@gmail.com');
        errors += regExpCheck(regMessage, message, 'Poruka', 'Minimalno 8 karaktera');

        if (errors == 0) {
            let url = '../../logic/message.php';
            let data = {
                fullName: fullName.val(), email: email.val(), message: message.val()
            }

            ajaxCallback(url, 'post', data, function (result) {
                alert(result.message);
                location.reload();
            })
        }
    });
    //newsletter
    $('#btn-newsletter').click(function () {
        console.log('newsletter')
        let errors = 0;
        let email = $('#nl-email');
        let path = $('#path').val();
        let regEmail = /^[a-z|A-Z][a-z|A-Z+.|0-9]{2,40}[a-z|A-Z|0-9][@]([a-z]{3,12}[.])*[a-z]{2,4}$/;
        errors += regExpCheck(regEmail, email, 'E-adresa', 'anamarija000@gmail.com');

        if (errors == 0) {
            let url = path + 'logic/newsletter.php';
            let data = {
                email: email.val()
            }

            ajaxCallback(url, 'post', data, function (result) {
                alert(result.message);
                location.reload();
            })
        }
    });
    //survey
    $('#btn-survey-send').click(function () {
        let rating = $('input[name="sur-rating"]:checked');
        let user_id = $('#sur-user-id').val();
        let message = $('#sur-message');

        let regMessage = /^.{8,}$/;

        let error = 0;

        error += regExpCheck(regMessage, message, 'Poruka', 'Minimalno 8 karaktera.');

        console.log(rating)
        if (rating.length < 1) {
            $('#rating-error').removeAttr('hidden');
            $('#rating-error').text('Morate izabrati ocenu.');
            error++;
        } else {
            $('#rating-error').attr('hidden', 'hidden');
            $('#rating-error').text("");
            error = 0;
        }

        if (error == 0) {
            let url = 'logic/survey.php';
            let data = {
                rating: rating.val(),
                message: message.val(),
                user_id: user_id
            }

            ajaxCallback(url, 'post', data, function (result) {
                alert(result.message);
                location.href = "index.php";
            });
        }
    });
});

function displayFood(foodArray) {
    let html = "";
    if (foodArray != 0) {
        for (let food of foodArray) {
            html += `<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <div class="food-card h-100 ">
                                <div class="food-card_img">
                                    <img src="../../assets/imgs/food_img/${food.food_image_url}"
                                         alt="${food.food_image_alt}">`
            if (food.food_popular === 1) {
                html += `<p class="p-1 rounded">Popularno</p>`
            }

            html += `</div>
                        <div class="food-card_content">
                            <div class="food-card_title-section mb-0">
                                <p class="food-card_title">${food.food_name}</p>
                                <p class="food-card_author">${food.category_name}</p>
                            </div>
                            <hr>
                            <div class="food-card_bottom-section">
                                <div class="space-between">
                                    <p>${food.food_desc}</p>
                                </div>
                                <div class="space-between">
                                    <div>
                                        <span class="fa fa-fire"></span>${food.food_kcal} Kcal
                                    </div>
                                </div>
                                <hr>
                                <div class="space-between">
                                    <div class="food-card_price">
                                        <span>${food.food_price} RSD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`
        }
    } else {
        html += `<p class="alert alert-danger m-5" style="margin: 50px !important; width: 75%;">Trenutno nema proizvoda.</p>`;
    }

    let displayFood = document.getElementById('food-display');
    displayFood.innerHTML = html;
}

function filter() {
    let keyword = $('#sort-keyword').val();
    let category = $('#sort-category').val();
    let popular = $('#sort-popular').is(':checked') ? 1 : 0;

    let url = '../../logic/filter.php';
    let data = {
        category: category,
        keyword: keyword,
        popular: popular
    }

    ajaxCallback(url, 'post', data, function (result) {
        displayFood(result);
    })
}

function ajaxCallback(url, method, data, result, xhr) {
    $.ajax({
        url: url,
        method: method,
        data: data,
        dataType: 'json',
        success: result,
        error: xhr
    });
}

function regExpCheck(regex, input, string, example = "") {
    let error = 0;
    if (input.val() == "") {
        input.next().removeAttr('hidden');
        input.next().text(string + " ne sme biti prazno.");
        error++;
    } else if (!regex.test(input.val())) {
        input.next().removeAttr('hidden');
        input.next().text(string + " nije ispravno popunjeno. " + example);
        error++;
    } else {
        input.next().attr('hidden', 'hidden');
        input.next().text("");
        error = 0;
    }

    return error;
}