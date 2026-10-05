@props(['user'])

<div class="flex items-center gap-2">
    <a href="{{ route('user.edit', $user->id) }}" class="btn-edit">Edit</a>

    <form action="{{ route('user.destroy', $user->id) }}" method="POST"
        onsubmit="return confirm('Hapus {{ $user->nama }}?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-danger">Hapus</button>
    </form>
</div>
