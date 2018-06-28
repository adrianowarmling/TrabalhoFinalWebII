<form action="cadastro-territorio.php" method="POST">
        <div class="form-group">
            <label for="nome">ID Território:</label>
            <input type="number" name="IDTerritorio" id="IDTerritorio"  class="form-control" placeholder="IDTerritorio">
        </div>
        <div>
            <label for="DescricaoTerritorio">Descrição Território:</label>
            <input type="text" name="DescricaoTerritorio" id="DescricaoTerritorio" required class="form-control" placeholder="DescricaoTerritorio">
        </div>
        
            <div class="form-group">
                <label for="regiao">ID Região</label>
                <select name="IDRegiao" id="IDRegiao" class="form-control">
                    <?php foreach ($regioes as $regiao): ?>
                        <option value="<?=$regiao['IDRegiao']?>"><?=$regiao['IDRegiao']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-success totalwidth">Submit</button>
        </div>
    </form>