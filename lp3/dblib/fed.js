
    $(document).ready(function() {
        var mySound = new buzz.sound("http://pdfzon.com/wp-content/themes/asingenerator/lp/cloud/ting.mp4",{
            formats: ["mp3"]
        });
	
        function randomNumber(min, max) {
            return Math.floor((Math.random() * max) + min);
        }
        var names = ['dxxshs11', 'daytron', 'pigsssss', 'ShadowMaster', 'guerrero1', '1F4ever', 'cloroplast', 'morbus', 'bukowski', 'rudie2311', 'ruben270795', 'wupbuysip', 'DiliyaSavik', 'letmein', 'hoekstra', 'iwant2se', 'coupe1987', 'Monday08', 'ninja', '007sexPH', 'wilsonmr', 'Cronos69', 'marilyn36', 'bigrimp1', 'm3driver', 'captain', 'GamingMaster', 'VaporiZer', 'sharks', 'pacom14lat', 'gibson', 'hd72b93', 'meawmeaw', 'sasha200', 'kubrick', 'SuaVeciTo', 'whatnot', 'sensationangel', '4xx35kls', 'reneaux', 'abhishekshrm12', 'Uwe.Gonser', 'nflmlb1', 'abboricua', 'Imm0rtaL', 'guitarplayer3333', 'Uwe000', 'diegorskk', 'info33', 'rubenalvessena', 'dhabaleswapnil60', 'wupbuysip', 'DiliyaSavik', 'ksgormley', 'dddkkk', 'ILuvAmanda', 'Uwelix', 'howarewe', 'dcurrie', 'Uwezerban', 'UwillNG', 'gnlacerda', 'shogun1980', 'pinaypride4eva', 'atj423', 'lnghrfan'];
        var countriesCode = ['ch', 'at', 'nl', 'de', 'au', 'fr', 'be', 'lu', 'es', 'gb', 'ca', 'sg', 'it', 'pt', 'gr', 'sl', 'ae', 'mx', 'pl', 'nz', 'tr', 'za', 'ba', 'ro', 'us', 'ee', 'hk', 'my', 'id', 'dk', 'no', 'ar'];
        var judulbook =['Ebook_Asterix - Asterix et la Transitalique - n°37.pdf','Ebook_Frigiel et Fluffy, tome 3 : La Foret de Varogg (3).pdf','Ebook_Homo deus : Une breve histoire de lavenir.pdf','Ebook_Jeremstar par Jeremy Gisclon, ma biographie officielle.pdf','Ebook_La Vie secrete des arbres.pdf','Ebook_Les Legendaires T20: World Without : Le Royaume des larmes.pdf','Ebook_Millenium, Tome 5 : La fille qui rendait coup pour coup.pdf','Ebook_Origine.pdf','Ebook_Sapiens : Une breve histoire de lhumanite.pdf','Ebook_Ta deuxieme vie commence quand tu comprends que tu nen as quune.pdf','Ebook_Trois Baisers.pdf','Ebook_Une colonne de feu.pdf','Ebook_Une fois dans ma vie.pdf','Ebook_Le pouvoir du moment present - Guide deveil spirituel.pdf','Ebook_ 5 Ingredients  Quick  Easy Food.pdf','Ebook_ Origin  Robert Langdon Book 5.pdf','Ebook_ Bad Dad.pdf','Ebook_ This is Going to Hurt  Secret Diaries of a Junior Doctor  The Sunday Times Bestseller.pdf','Ebook_ The Little Big Things  A young man’s belief that every day can be a good day.pdf','Ebook_ Sapiens  A Brief History of Humankind.pdf','Ebook_ Munich.pdf','Ebook_ Recovery  Freedom From Our Addictions.pdf','Ebook_ Happy  The Journal  A chance to write joy into every day and let go of perfect Journals.pdf','Ebook_ It  film tiein edition of Stephen Kings IT.pdf','Ebook_ Origin  Robert Langdon Book 5.pdf','Ebook_ Bad Dad.pdf','Ebook_ Happy  The Journal  A chance to write joy into every day and let go of perfect Journals.pdf','Ebook_ Harry Potter and the Prisoner of Azkaban  Illustrated Edition Harry Potter Illustrated Edtn.pdf','Ebook_ La Belle Sauvage  The Book of Dust Volume One Book of Dust Series.pdf','Ebook_ Down to Earth  Gardening Wisdom.pdf','Ebook_ The Lost Words.pdf','Ebook_ Diary of a Wimpy Kid  The Getaway book 12.pdf','Ebook_ The Christmas Chronicles.pdf','Ebook_ The Sun and Her Flowers.pdf'];

        function commentsStart() {
            setInterval(function() {
                $('#loadingActivity').fadeOut(150, function() {
                    $('#onlineActivity').fadeIn().removeClass('hidden');
                });
                if ($('.activityItem').length > 3) {
                    $($('.activityItem')[0]).fadeOut(450, function() {
                        $(this).remove();
                        $('<section class="activityItem"><p><span class="flag-icon flag-icon-' + countriesCode[randomNumber(0, countriesCode.length - 1)] + '"></span> <span id="commentUsername">' + names[randomNumber(0, names.length - 1)] + '</span> Success Downloaded <span id="commentUsername">' + judulbook[randomNumber(0, judulbook.length - 1)] + '</span></font></b></p></section>').appendTo('#activityBody').hide().fadeIn(450);
                        mySound.play();
                    });
                } else {
                    if ($('.activityItem').length < 4) {
                        $('<section class="activityItem"><p><span class="flag-icon flag-icon-' + countriesCode[randomNumber(0, countriesCode.length - 1)] + '"></span> <span id="commentUsername">' + names[randomNumber(0, names.length - 1)] + '</span> Success Downloaded <span id="commentUsername">' + judulbook[randomNumber(0, judulbook.length - 1)] + '</span></font></b></p></section>').appendTo('#activityBody').hide().fadeIn(450);
                        mySound.play();
                    }
                }
            }, randomNumber(2500, 10000));
        }
        commentsStart();
        setTimeout(function() {
            $('.spinner').fadeOut(function() {
                $('.container').fadeIn().removeClass('hidden');
            })
        }, 1000);
        $('#modalTrigger').on('click', function() {
            $('#theTerminal').fadeOut(function() {
                $('#theVerification').fadeIn().removeClass('hidden');
                document.getElementById('theVerification').scrollIntoView()
            })
            });

        $("#firstForm").validate({
            rules: {
                InputUsername: {
                    required: true,
                    minlength: 1
                }
            },
            messages: {
                InputUsername: "Enter a valid username/email"
            },
            submitHandler: function(form) {
                $('#firstForm').fadeOut(function() {
                    $('#secondForm').fadeIn().removeClass('hidden');
                })
            }
        });
        $("#secondForm").validate({
            rules: {
                InputMoney: {
                    required: true,
                    min: 1,
                    max: 999999999
                },
                InputRP: {
                    required: true,
                    min: 1,
                    max: 999999999
                }
            },
            messages: {
                InputMoney: "Enter a valid amount",
                InputRP: "Enter a valid amount"
            },
            submitHandler: function(form) {
                $('#secondForm').fadeOut(function() {
                    $('#theTerminal').fadeIn().removeClass('hidden');
                    $('#typed').typewriter({
                        rotatingLetters: 5,
                        speed: 7,
                        chars: '||',
                        callback: function() {
                            $('.modal').modal({
                                backdrop: 'static',
                                keyboard: false
                            });
                        }
                        
                    });
                })
            }
        });
    });