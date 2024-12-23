<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    name="email" required
                />
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    name="password" required
                />
            </div>
            <button 
                type="submit" 
                class="border-stone-800 bg-lime-500 text-slate-100 px-4 py-1 rounded-md border-2 hover:bg-lime-800"
            >
                Logar
            </button>
        </form>
    </div>
    
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastro</h1>
        <form class="p-4 space-y-4" method="POST" action="/register">
            <?php if(isset($message) && strlen($message)): ?>
                <div class="border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                    <?php echo $message ?>
                </div>
            <?php endif;?>
            <?php if(isset($validations) && sizeof($validations)): ?>
                <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                    <ul>
                        <li>Ops! Algo deu errado!</li>
                        <?php foreach($validations as $validation): ?>
                            <li><?=$validation?></li>
                        <?php endforeach;?>    
                    </ul>
                </div>
            <?php endif;?>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Nome</label>
                <input
                    type="text"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    name="name"
                />
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    name="email" required
                />
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Confirme seu email</label>
                <input
                    type="email"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    name="email-confirmation"
                />
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    name="password" 
                />
            </div>
            <button 
                type="submit" 
                class="border-stone-800 bg-lime-500 text-slate-100 px-4 py-1 rounded-md border-2 hover:bg-lime-800"
            >
                Cadastrar
            </button>
            <button 
                type="reset" 
                class="border-stone-800 bg-rose-500 text-slate-100 px-4 py-1 rounded-md border-2 hover:bg-rose-900"
            >
                Cancelar
            </button>
        </form>
    </div>
</div>