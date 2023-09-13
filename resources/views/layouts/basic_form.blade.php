<div>
    <div class="VisitorName col-auto">
        <p><label for="VisitorName" class="form-label" style="color: blue; font-weight:bold;font-size:2rem;">お名前、または御法人名</label></p>
        <p><input class="form-control" type="text" name="VisitorName" id="VisitorName" placeholder="お名前、または御法人名をご記入下さい。"></p>
    </div>
    <div class="VisitorEmail col-auto">
        <p><label for="VisitorEmail" class="form-label" style="color: blue; font-weight:bold;font-size:2rem;">Emailアドレス</label></p>
        <p><input class="form-control" type="email"  name="VisitorEmail" id="VisitorEmail" placeholder="ご連絡のつきやすいEmailアドレスをご記入ください。"></p>
    </div>
    <div class="QuestionOrOpinion col-auto">
        <p><label for="QuestionOrOpinion" class="form-label" style="color:  blue; font-weight:bold;font-size:2rem;">お問い合わせ</label></p>
        <textarea class="form-control  leading-relaxed " name="QuestionOrOpinion" id="QuestionOrOpinion" cols="30" rows="10" placeholder="ご質問等ございましたらお気軽にご連絡下さい。"></textarea>
    </div>
        <x-primary-button style="margin-top: 1rem;">
            送信（POST）
        </x-primary-button>
</div>
