<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            Студенты
        </div>
    </div>
    <input type="number" min="0" step="1" class="form-control border-dark" name="number" id="number" placeholder="Количество студентов в группе" value="{{ $number or '' }}" required>
</div>
<p>Результаты семестра</p>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            Оценок 5
        </div>
    </div>
    <input type="number" min="0" step="1" class="form-control border-dark" name="mark5" id="mark5" placeholder="Количество оценок 5 по результатам семестра" value="{{ $mark['5'] or '' }}" required>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            Оценок 4
        </div>
    </div>
    <input type="number" min="0" step="1" class="form-control border-dark" name="mark4" id="mark4" placeholder="Количество оценок 4 по результатам семестра" value="{{ $mark['4'] or '' }}" required>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            Оценок 3
        </div>
    </div>
    <input type="number" min="0" step="1" class="form-control border-dark" name="mark3" id="mark3" placeholder="Количество оценок 3 по результатам семестра" value="{{ $mark['3'] or '' }}" required>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <div class="input-group-text bg-light border-dark">
            Оценок 2
        </div>
    </div>
    <input type="number" min="0" step="1" class="form-control border-dark" name="mark2" id="mark2" placeholder="Количество оценок 2 (н/а) по результатам семестра" value="{{ $mark['2'] or '' }}" required>
</div>
<button type="submit" name="calculate" class="btn btn-light border-dark btn-block">Вычислить</button>
